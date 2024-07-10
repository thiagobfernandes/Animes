
<?php
$isLoggedIn = isset($_COOKIE['nome_usuario']) && isset($_COOKIE['senha_usuario']);

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnimesNexus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="description" content="Sobre animes">
    <link rel="shortcut icon" href="imagens/Warrior.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
      <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      </style>
      <base href="http://localhost/animes/Animes/index.php">
  </head>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <body>
  <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="home"><img src="imagens/Warrior.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link active text-light fs-5" aria-current="page" href="#">Todos os Animes</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="#">Desenvolvedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="">Fale Conosco</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="#">Contatos</a>
        </li>
       
        
         
        
         
      </ul>
      <form class="d-flex" role="search" action="resultados">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" id="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <?php if($isLoggedIn){ ?>
        <a href="paginalogin" class="login btn btn-success mx-2 d-none" > Login </a>  
        <a href="registro" class="login btn btn-primary d-none "> Cadastre-se </a>
<?php
      } else if(!$isLoggedIn){ ?>
      
      <a href="paginalogin" class="login btn btn-success mx-2 " > Login </a>  
      <a href="registro" class="login btn btn-primary  "> Cadastre-se </a>
    
     <?php
    }
      
      
      ?>
    
    </div>
  </div>
</nav>












<?php

  if(isset($_GET["param"])) {
    $p= explode("/", $_GET["param"]);
  }
  $page= $p[0] ?? "home";
  $codigo=$p[1] ?? NULL;

  $pagina="paginas/$page.php";
  

  if(file_exists($pagina)) {
    include $pagina;
  } else {
    include "paginas/erro.php";
  }
   
?>

<footer class="w-100 p-4 text-light" style="background-image: linear-gradient(to right top, #051937, #171228, #190a1a, #12040d, #000000);">

<h2 class="text-center my-2">Desenvolvido por Thiago Borges Fernandes</h2>

<p class="text-center">Neste projeto, utilizei PHP, JavaScript, Bootstrap, CSS e MySQL <br> além da API pública do Jikan (https://api.jikan.moe/v4/anime), para desenvolver uma aplicação web eficiente e funcional, exibindo cards de animes.</p>
<div class="redes text-center ">
    <a href="" class="text-light fs-3"><i class="fa-brands fa-github"></i></a>
    <a href=""class="text-light fs-3" ><i class="fa-brands fa-linkedin"></i></a>
    <a href="" class="text-light fs-3"><i class="fa-brands fa-square-instagram"></i></a>
</div>


</footer>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad33ce79da.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
   
  </body>
</html>