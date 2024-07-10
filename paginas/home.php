






<section class="section  row w-100 p-0 m-0  ">
<div class=" background">
<video src="./imagens/gokuzada.mp4" autoplay muted loop  ></video>
               
    
                </div>


    <h2 class="p-4">Animes Recentes</h2>
        

    <?php
    $url="https://api.jikan.moe/v4/anime";
    $dados=file_get_contents($url);
    $dados= json_decode($dados,true);
    
    
    $contador=1;
    
    
        foreach(array_slice($dados['data'],0,4) as $arquivos){
            ?>
            <div class="cards col-md-3 p-0  " data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;">
              <img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px;">
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="alinhar d-flex">
                    <a href=""class="btnn btn"> Saiba Mais</a>
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


<section class="section populares row w-100 p-0 m-0 bg-dark text-light ">


    <h2 class="p-4">Animes Populares</h2>
        

    <?php
   
    
  
    
    
        foreach(array_slice($dados['data'],10,4) as $arquivos){
            ?>
            <div class="cards col-md-3 p-0  " data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;">
              <img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px;">
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="alinhar d-flex">
                    <a href=""class="btnn btn"> Saiba Mais</a>
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

<section class="section row w-100 p-0 m-0 ">


    <h2 class="p-4">Todos Animes</h2>
        

    <?php
   
    
   $url="https://api.jikan.moe/v4/anime?q=dra";
    $dados=file_get_contents($url);
    $dados= json_decode($dados,true);
    
    
        foreach(array_slice($dados['data'],0,20) as $arquivos){
            ?>
            <div class="cards col-md-3 p-0 " data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;" >
              <img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px; border-radius: 4px;">
            <div class="card-body text-center p-2">
                <p class="card-text fs-"><?=$arquivos['title']?></p>
                <div class="alinhar d-flex">
                    <a href=""class="btnn btn"> Saiba Mais</a>
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

<!--TODOS OS ANIMES, LETRA B -->


  <?php
   
    
   $url="https://api.jikan.moe/v4/anime?q=nanat";
    $dados=file_get_contents($url);
    $dados= json_decode($dados,true);
    
    
        foreach(array_slice($dados['data'],0,20) as $arquivos){
          
            ?>
            <div class="cards col-md-3 p-0" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;" style="height:600px; ">
              <img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px; border-radius: 4px;">
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="alinhar d-flex">
                    <a href=""class="btnn btn"> Saiba Mais</a>
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


<?php
   
    
   $url="https://api.jikan.moe/v4/anime?q=attac";
    $dados=file_get_contents($url);
    $dados= json_decode($dados,true);
    
    
        foreach(array_slice($dados['data'],0,20) as $arquivos){
            ?>
            <div class="cards col-md-3 p-0" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <div class="card2  d-flex justify-content-center">
                <div class="cardes" style="width: 18rem;  margin-bottom: 40px;" style="height:600px;">
              <img src="<?=$arquivos['images']['webp']['image_url']?>" class="card-img-top" alt="..." style="height: 300px; border-radius: 4px;">
            <div class="card-body text-center p-2">
                <p class="card-text fs-6"><?=$arquivos['title']?></p>
                <div class="alinhar d-flex">
                    <a href=""class="btnn btn"> Saiba Mais</a>
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


















