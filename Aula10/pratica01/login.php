<?php
    session_start();

    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        $sUsuario = $_POST['usuario'];
        $sSenha = $_POST['senha'];

        
        if($sUsuario == "usuario" && $sSenha == "senha"){
            $_SESSION['usuario'] = $sUsuario;
            $_SESSION['senha'] = $sSenha;
            $_SESSION['session_start'] = date('Y-m-d H:i:s');
            $_SESSION['last_request'] = date('Y-m-d H:i:s');
            header("Location: acesso.php");
            exit();
        } else {
            echo "Usuário ou senha inválidos!";
        }
    } else {
        header('Location: index.html');
        exit();
    }
?>