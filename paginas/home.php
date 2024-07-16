
<?php
  function gerarestrela($score){
    $stars=round($score/2);
    $html='';
    for($i=1; $i < 5; $i++){
        if($i < $stars){
            $html .= '<span class="fa fa-star checked"></span>';
        } else {
            $html .= '<span class="fa fa-star"></span>';
        }
    }

    return $html;

}?>





<section class="section  row w-100 p-0 m-0   ">
<div class=" background">
<video src="./imagens/gokuzada.mp4" autoplay muted loop  ></video>
               
    
                </div>


    <h2 class="p-4 text-light">Animes Recentes</h2>
        

    <?php
    $url="https://api.jikan.moe/v4/anime";
    $dados=file_get_contents($url);
    $dados= json_decode($dados,true);
    
    
    $contador=1;
    
    
        foreach(array_slice($dados['data'],0,4) as $arquivos){
            ?>
            <div class="cards col-md-3 p-0  text-light " data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;">
              <a href="pagina/<?=$arquivos['mal_id']?>"><img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px;"></a>
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="stars">
                        <p>Score: <?= gerarestrela($arquivos['score']) ?></p>
                    </div>
                
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
        }
    
    
    
    
    ?>
</section>


<section class="section  row w-100 p-0 m-0 branco  ">


    <h2 class="p-4 ">Animes Populares</h2>
        

    <?php
   
    
  
    
    
        foreach(array_slice($dados['data'],10,4) as $arquivos){
            ?>
            <div class="cards col-md-3 p-0  " data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;">
              <a href="pagina/<?=$arquivos['mal_id']?>"><img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px;"></a>
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="stars">
                        <p>Score: <?= gerarestrela($arquivos['score']) ?></p>
                    </div>
                <div class="alinhar d-flex flex-column justify-content-center text-center align-items-center">
                    <a href="pagina/<?=$arquivos['mal_id']?>"class="btnn btn"> Saiba Mais</a>
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
        }
    
    
    
    
    ?>
</section>

<section class="section row w-100 p-0 m-0   text-light ">

<div class="textos d-flex justify-content-between align-items-center">
<div class="titulo"><h2 class="p-4">Todos Animes</h2></div>
<div class="vermais"><a href="todosanimes" class="p-4 fs-5"> Ver mais</a></div>
</div>
    
        

    <?php
   
   $current_page = $current_page ?? 1;
   $url = "https://api.jikan.moe/v4/anime?page={$current_page}&limit=8";
    $dados=file_get_contents($url);
    $dados= json_decode($dados,true);
    
    
        foreach($dados['data'] as $arquivos){
            ?>
            <div class="cards col-md-3 p-0 " data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;" >
              <a href="pagina/<?=$arquivos['mal_id']?>"><img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px; border-radius: 4px;"></a>
            <div class="card-body text-center p-1">
                <p class="card-text pb-0 mb-0 w-100"><?=$arquivos['title']?></p>
                <div class="stars pt-1">
                        <p>Score: <?= gerarestrela($arquivos['score']) ?></p>
                    </div>
                <div class="alinhar d-flex flex-column justify-content-center text-center align-items-center ">
                    <a href="pagina/<?=$arquivos['mal_id']?>"class="btnn btn"> Saiba Mais</a>
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
        }
        $prev_page = $current_page > 1 ? $current_page - 1 : 1;
        $next_page = $current_page + 1;
    
    
    
    ?>
    <div class="pagination text-center d-flex justify-content-center  align-items-center">
  

    <nav aria-label="Page navigation example " data-bs-theme="dark">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="/animes/Animes/<?=$page?>/<?=$prev_page?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" ><?=$current_page?></a></li>
   
    <li class="page-item">
      <a class="page-link" href="/animes/Animes/<?=$page?>/<?=$next_page?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>         









</section>


















