<?php
    $senha_cripto = '$2y$05$lEVqUvkioSsykC4sxvqxleHg0teFQzLpCSF4lKFqyRAuGjjCJguoe';

    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;
    
    if ($usuario=='jairo' && password_verify($senha, $senha_cripto)) {
        //autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;
        header ('location:boasvindas.php');
        die; //die encerra o script
    }else{
        //autenticação com erro
        header ('location:form.php?erro=1');
        die;
    }
