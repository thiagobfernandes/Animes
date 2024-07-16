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
  
    
    setcookie('usuarioincorreto', "true", time()+20, '/');
    setcookie('senhaincorreta', "true", time()+20, '/');
    echo "<html><body>";
    echo "<script type='text/javascript'>
        window.location.href = '../paginalogin';
    </script>";
    echo "</body></html>";
    
} 
else
{
    
    $linhasdb=$row["senha"];
if ($senha != $linhasdb) {
 
    setcookie('usuarioincorreto', "true", time()+20, '/');
    setcookie('senhaincorreta',"true", time()+20, '/');
    echo "<html><body>";
    echo "<script type='text/javascript'>
        window.location.href = '../paginalogin';
    </script>";
    echo "</body></html>";

} else { 
    setcookie('nome_usuario', $username, $expiracao, '/');
    setcookie('senha_usuario', $senha, $expiracao, '/');
    setcookie('usuarioincorreto', "true", time()-20, '/');
    setcookie('senhaincorreta',"true", time()-20, '/');

    
 
 echo "<html><body>";
        echo "<script type='text/javascript'>window.location.href = '../home';</script>";
        echo "</body></html>";
 exit();
}
}

mysqli_close($conexao);
    ?>
