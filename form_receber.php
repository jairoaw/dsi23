<?php

    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;
    
    if ($usuario=='jairo' && $senha=='123') {
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
