<?php 
//obtem os valores digitados
$expiracao = time() + (7 * 24 * 60 * 60);
$username=$_POST["username"];
$senha= $_POST["senha"];




//acesso ao bando de dados
include "./conectar.php";
$username_escaped = mysqli_real_escape_string($conexao, $username);
$resultado= mysqli_query($conexao, "SELECT * FROM users where username='$username_escaped'");
$row=mysqli_fetch_assoc($resultado);




$linhas=mysqli_num_rows($resultado);






if($linhas==0) {//testar se houve registro 
    echo "<html> <body>";
    echo "<p aling=\"center\" > senha ou usuario </p>";
    echo "<p aling=\"center\" ><a href=\"../home \"> voltar </a> </p>";
    echo "</body> </html>";
    
} 
else
{
    
    $linhasdb=$row["senha"];
if ($senha != $linhasdb) {

    echo "<html> <body>";
echo "<p align=\"center\"> a senha ou usuario</p>" ;
echo "<p align= \"center\"> <a href= \"../home\" > voltar </a> </p>";
echo "</body> </html>";
} else { // usuario e senha corretos vamos criar os cookies
    setcookie('nome_usuario', $username, $expiracao, '/');
    setcookie('senha_usuario', $senha, $expiracao, '/');
 // direciona para a pagina incial dos usuarios cadastrados
 echo "<html><body>";
        echo "<script type='text/javascript'>window.location.href = '../home';</script>";
        echo "</body></html>";
 exit();
}
}

mysqli_close($conexao);
    ?>
