<?php
    require('pdo.inc.php');

    $usuario = $_POST['username'] ?? false;
    $senha = $_POST['password'] ?? false;

    $sql = $pdo -> query('INSERT INTO usuarios (username, password) VALUES ($usuario, $senha)');
     
?>

