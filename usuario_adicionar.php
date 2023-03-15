<?php
    require('pdo.inc.php');

    $usuario = $_POST['username'] ?? false;
    $senha = $_POST['password'] ?? false;

    //prepara a consulta
    $sql = $pdo -> prepare('INSERT INTO usuarios (username, password) VALUES ($usuario, $senha)');
    $sql -> bindParam(1, $usuario, PDO::PARAM_STR);  #evita ataques de sql injection
    
    //roda a consulta no banco
    $sql-> execute();

         
?>

