<?php
    session_start();
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if($usuario == 'admin' && $senha == '12345'){
        $_SESSION['usuario'] = $usuario;
        header("Location: http://localhost/sessao/secreto_1.php");
        exit;
    }
    else{
        setcookie("autenticacao", "falha de login", time()+1);
        header("Location: http://localhost/sessao/login.php");
        exit;
    }
?>