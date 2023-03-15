<?php
    #boasvindas.php
    
    session_start();
    if (!isset($_SESSION['usuario'])){
        header('location:form.php?erro=2');
        die; //ou exit
    }
    echo 'login realizado com sucesso';


?>
<p>
    <?php
    if ($_SESSION['admin']){
        ?>
        <a href="usuarios.php"> Usuarios </a>
    <?php
    }
    ?>
    <a href="logout.php">Sair</a>
</p>