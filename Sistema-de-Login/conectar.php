<?php 
$host = 
$usuario = // Nome de usuário
$senha = // Senha
$banco = ; // Nome do banco de dados
$porta = // Porta (substi
$conexao = mysqli_connect($host, $usuario, $senha, $banco, $porta);
mysqli_select_db($conexao, "railway");

?>