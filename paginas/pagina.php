<?php
$url = $_SERVER['REQUEST_URI'];
$param = $_GET['param']; // Isso será 'pagina/2' no seu exemplo
$p = explode('/', $param); // Divide a string usando '/'
$numero = $p[1]; // Isso será '2' no seu exemplo // Isso será '/animes/Animes/pagina/2'
$url2="https://api.jikan.moe/v4/anime/$numero";
$dados=file_get_contents($url2);
$dados=json_decode($dados,true);








?>
<section class="animes populares py-4 w-100 h-100">


<div class="envolver d-flex text-center flex-column ">
    
        <div class="text-center px-4 ">
        <h3 class="text-light px-4 text-center"><?=$dados['data']['title']?></h3>
    
        <img src="<?=$dados['data']['images']['jpg']['large_image_url']?>" alt="" class="text-center imgg w-100">
</div>


<div class="informacoes px-4 d-md-flex text-light w-100 justify-content-center flex-column flex-md-row  gap-3">



<div class="coluna d-flex flex-column ">
<div class="titulo pt-3"> <h3><?=$dados['data']['title']?></h3></div>
    <div class="info d-flex border border-2  w-100 justify-content-center flex-column flex-md-row">
        <div class="rank d-flex flex-column m-2">
            <h5 class=" m-0 p-2 bg-primary  w-100  ">Score</h5>
            <h6 class="m-2"><?=$dados['data']['score']?></h6>
        </div>
    
        <div class="rank d-flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Rank</h5>
        <h6 class="m-2">#<?=$dados['data']['rank']?></h6>
    
        </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">popularidade</h5>
        <h6 class="m-2">#<?=$dados['data']['popularity']?></h6>
    
        </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Membros</h5>
        <h6 class="m-2"><?=$dados['data']['members']?></h6>
    
        </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Favoritos</h5>
        <h6 class="m-2"><?=$dados['data']['favorites']?></h6>
    
        </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100 ">Tipo</h5>
        <h6 class="m-2"><?=$dados['data']['type']?></h6>
        </div>
    </div>
    
    <div class="producao d-flex flex-column border border-2 w-100   ">
    <?php if(!empty($dados['data']['producers'])) { ?>
    <div class="textos text-center px-2 ">
        <div class="text w-100 rank p-1 my-2">
            
        <div class="titulo  m-0 p-1 bg-primary  "><h5 class="text-center">Sobre Produção</h5></div>
            <p><strong>Produção: </strong><?=$dados['data']['producers'][0]['name']?></p>
            <p><strong>Tipo: </strong><?=$dados['data']['producers'][0]['type']?></p>
            <p><strong>Url: </strong><a href="<?=$dados['data']['producers'][0]['url']?>"target="_blank"><?=$dados['data']['producers'][0]['name']?></a></p>
        </div>
    </div>
    <?php
            }
            ?>

            <?php if(!empty($dados['data']['licensors'])) { ?>
            
            
    <div class="textos text-center px-2 ">
        <div class="text w-100 rank p-1 my-2">
        <div class="titulo  m-0 p-1 bg-primary  "><h5 class="text-center">Licenças</h5></div>
            <p><strong>Produção: </strong><?=$dados['data']['licensors'][0]['name']?></p>
            <p><strong>Tipo: </strong><?=$dados['data']['licensors'][0]['type']?></p>
            <p><strong>Url: </strong><a href="<?=$dados['data']['licensors'][0]['url']?>" target="_blank"><?=$dados['data']['licensors'][0]['name']?></a></p>
        </div>
    </div>
    <?php
            } 
            ?>

            <?php if(!empty($dados['data']['studios'])) {?>
                <div class="textos text-center px-2 ">
                <div class="text w-100 rank p-1 my-2">
                <div class="titulo  m-0 p-1 bg-primary  "><h5 class="text-center">Studios</h5></div>
                    <p><strong>Produção: </strong><?=$dados['data']['studios'][0]['name']?></p>
                    <p><strong>Tipo: </strong><?=$dados['data']['studios'][0]['type']?></p>
                    <p><strong>Url: </strong><a href="<?=$dados['data']['studios'][0]['url']?>"target="_blank"><?=$dados['data']['studios'][0]['name']?></a></p>
                </div>
            </div>
            <?php

            }
            ?>
            
    
    
</div>


</div>

<div class="animes w-100 text-center text-light " >
<div class="titulo pt-3"> <h3>Sobre <?=$dados['data']['title']?></h3></div>
<div class="info d-flex border border-2  text-center  justify-content-center flex-column flex-md-row">
    
        <div class="rank d-flex flex-column m-2">
            <h5 class=" m-0 p-2 bg-primary  w-100  ">Titulo</h5>
            <h6 class="m-2"><?=$dados['data']['title']?></h6>
        </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Episodios</h5>
        <h6 class="m-2"><?=$dados['data']['episodes']?></h6>
    
        </div>
    
        <div class="rank d-flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Status</h5>
        <h6 class="m-2"><?=$dados['data']['status']?></h6>
    
        </div>
       
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Avaliação</h5>
        <h6 class="m-2"><?=$dados['data']['rating']?></h6>
    
    </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Duração</h5>
        <h6 class="m-2"><?=$dados['data']['duration']?></h6>
    
    </div>
        <div class="rank -flex flex-column m-2">
        <h5 class=" m-0 p-2 bg-primary  w-100  ">Lançamento</h5>
        <h6 class="m-2"><?=$dados['data']['aired']['string']?></h6>
    
    </div>
   




</div>

<div class="dados mt-2 d-flex flex-column border border-2 w-100  ">
    <div class="url my-2  text-center rank m-2"> <p>Url do Anime</p> 
        <p class="text-light"><a href="<?=$dados['data']['url']?>" target="_blank" ><?=$dados['data']['title']?></a></p></div>
    <div class="sinopse d-block d-md-flex w-100" >
        <div class="sin rank d-flex flex-column m-2  ">
            <p class="text-center mb-1 "> <strong>Sinopse</strong></p>
            <p class="text-center pt-0 mt-0 px-1"><?=$dados['data']['synopsis']?></p>
        </div>
    



        
    </div>
    <div class="sinopse d-block d-md-flex w-100" >
        <div class="sin rank d-flex flex-column  w-100">
            <p class="text-center mb-1 " > <strong>Generos</strong></p>
            
             <p class=" text-center w-100 my-1"><?=$dados['data']['genres'][0]['name']?></p>
             
            
            
          
        </div>

</div>




<?php if($dados['data']['trailer']['embed_url'] != NULL) {
     
     ?>
     <div class="trailer text-center text-light d-none"><iframe src="<?=$dados['data']['trailer']['embed_url']?>" frameborder="0"></iframe></div>

     <?php
 
 
 } else  {?>
<div class="trailer text-center text-light d-none"><?=$dados['data']['images']['jpg']['image_url']?></div>
<?php
 }
 ?>


</div>

</div>

</div>



</section>