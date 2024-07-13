<?php


if(isset($_COOKIE['nome_usuario']) && isset($_COOKIE['senha_usuario'])) {
   
    $nome_usuario = $_COOKIE['nome_usuario'];
    $senha_usuario = $_COOKIE['senha_usuario'];
  
    $expiracao = 7 * 24 * 60 * 60; // 7 dias em segundos
    setcookie('nome_usuario', '', time() - $expiracao, '/');
    setcookie('senha_usuario', '', time() - $expiracao, '/');
   
    echo "Logout realizado com sucesso!";
    header('Location: paginalogin.php');
} else {
    
    echo "Não há cookies de login definidos. O usuário já está deslogado.";
}
?>









?>
