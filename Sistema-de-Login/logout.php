<?php


if(isset($_COOKIE['nome_usuario']) && isset($_COOKIE['senha_usuario'])) {
    // Obtém os valores dos cookies
    $nome_usuario = $_COOKIE['nome_usuario'];
    $senha_usuario = $_COOKIE['senha_usuario'];

   
    $expiracao = 7 * 24 * 60 * 60; 

    // Desconfigura os cookies 'nome_usuario' e 'senha_usuario'
    setcookie('nome_usuario', '', time() - $expiracao, '/');
    setcookie('senha_usuario', '', time() - $expiracao, '/');

    // Mensagem de confirmação ou redirecionamento após o logout
    echo "Logout realizado com sucesso!";
    // Redireciona o usuário para a página de login, por exemplo:
    // header('Location: paginalogin.php');
} else {
    // Caso os cookies não estejam definidos, pode ser que o usuário já tenha feito logout anteriormente
    echo "Não há cookies de login definidos. O usuário já está deslogado.";
}
?>









?>