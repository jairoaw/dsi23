<?php
    #boasvindas.php
    session_start();
    if (!isset($_SESSION['usuario'])){
        header('location:form.php?erro=2');
        die; //ou exit
    }
    echo 'login realizado com sucesso';
?>