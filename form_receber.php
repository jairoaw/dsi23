<?php
    require('pdo.inc.php');

    #$senha_cripto = '$2y$05$lEVqUvkioSsykC4sxvqxleHg0teFQzLpCSF4lKFqyRAuGjjCJguoe';
    // Exemplo de prática não tão boa
    // if (!isset($_POST['usuario']) || 
    // !isset($_POST['senha'])) {
    //     echo 'Envie o form';
    //     die;
    // }

    // Nullish coalescing operator
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    //prepara a consulta
    $sql = $pdo -> prepare('SELECT * FROM usuarios WHERE username = ? AND active=1');
    $sql -> bindParam(1, $usuario, PDO::PARAM_STR);  #evita ataques de sql injection
    
    //roda a consulta no banco
    $sql-> execute();
    
    //busca os dados do banco
    $dados = $sql -> fetch(PDO::FETCH_ASSOC);

    if (($sql->rowCount() == 1) 
        && password_verify($senha, $dados['password'])) {
        // Autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $dados['admin'];

        header('location:boasvindas.php');
        die;
    } else {
        // Autenticação falhou
        header('location:form.php?erro=1');
        die;
    }