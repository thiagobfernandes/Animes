<?php

$username = $_POST["username"];
$senha = $_POST["senha"];
$email = $_POST["email"];

include "./conectar.php";


$username_escaped = mysqli_real_escape_string($conexao, $username);
$email_escaped = mysqli_real_escape_string($conexao, $email);


$sql = "SELECT COUNT(*) as count FROM users WHERE username='$username_escaped' OR email='$email_escaped'";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($resultado);


if ($row['count'] > 0) {
    setcookie('Registro', 'true', time()+20,'/');
    echo "<script type='text/javascript'>window.location.href = '../registro';</script>";
    
} else {
   
    $senha_escaped = mysqli_real_escape_string($conexao, $senha);
    
    $insert_sql = "INSERT INTO users (username, senha, email) VALUES ('$username_escaped', '$senha_escaped', '$email_escaped')";
    if (mysqli_query($conexao, $insert_sql)) {
        setcookie("nome_usuario", $username, time() + (86400 * 30), "/");
        setcookie("senha_usuario", $senha, time() + (86400 * 30), "/");
        setcookie('Registro', 'true', time()-20,'/');

        // Redireciona para a página de login
        echo "<script type='text/javascript'>window.location.href = '../paginalogin';</script>";
    } else {
        echo "Erro ao inserir o usuário: " . mysqli_error($conexao);
    }
}

mysqli_close($conexao);
?>
