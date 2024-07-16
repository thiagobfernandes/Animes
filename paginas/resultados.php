<section class="section row w-100 p-0 m-0  text-light " style=" background-image: linear-gradient(to right top, #051937, #171228, #190a1a, #12040d, #000000);">


<?php
if (isset($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $api_url = "https://api.jikan.moe/v4/anime?q=" . urlencode($search);

    $response = file_get_contents($api_url);
    $data = json_decode($response, true);
}
?>


  


    <h1 class="p-4">Resultados da Pesquisa para "<?php echo $search; ?>"</h1>
    <?php if (!empty($data['data'])): ?>
        
            <?php foreach ($data['data'] as $arquivos){
?>
 <div class="cards col-md-3 p-0  mb-4 ">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;">
              <a href="pagina/<?=$arquivos['mal_id']?>"><img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px; border-radius: 4px;"></a>
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="alinhar d-flex flex-column justify-content-center text-center align-items-center">
                    <a href="pagina/<?=$arquivos['mal_id']?>" class="btnn btn"> Saiba Mais</a>
                    <button type="button" class="bta" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$arquivos['mal_id']?>">
                     Sinopse
                    </button>
                </div>
                </div>
               
            </div>





                </div>

            </div>

            <div class="modal fade" id="staticBackdrop<?=$arquivos['mal_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?=$arquivos['mal_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable ">
    <div class="modal-content bg-dark">
      <div class="modal-header text-light" style="';)">
        <h1 class="modal-title fs-5" id="staticBackdropLabel<?=$arquivos['mal_id']?>"><?=$arquivos['title']?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-light">
        <div class="inicio">
          


        </div>
       <p><?=$arquivos['synopsis']?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>







<?php





            }?>
              
            
        
    <?php else: ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?>
    </section>