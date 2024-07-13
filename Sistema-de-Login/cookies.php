<?php 
$expiracao = time() + (7 * 24 * 60 * 60);
   if(isset($_COOKIE["nome_usuario"]))
    $nome_usuario = $_COOKIE["nome_usuario"];
    if(isset($_COOKIE["senha_usuario"]));
    $senha_usuario= $_COOKIE["senha_usuario"];
  



    if(!(empty($nome_usuario) or empty($senha_usuario))) {
        include "../conectar.php";
        $resultado= mysqli_query( $conexao, "SELECT * FROM users where username='$nome_usuario'");
        $row=mysqli_fetch_assoc($resultado);
        
        if(mysqli_num_rows($resultado)==1) {
            if($senha_usuario != $row["senha"]) { 
                setcookie('nome_usuario', '', $expiracao, '/');
                setcookie('senha_usuario', '', $expiracao, '/');
                echo "voce nao efetuou o login!";
                exit;

            }
        } else 
        {
            setcookie('nome_usuario', '', $expiracao, '/');
            setcookie('senha_usuario', '', $expiracao, '/');
            echo "voce nao efetuaou o login";
        }


    } else {
        echo"voce nao efetuou o login";
        exit;
    }


   mysqli_close($conexao);


?>