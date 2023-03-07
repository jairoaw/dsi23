<?php 
    include ('variaveis.php');
    include ('head.php');
?>

<body>
    <a href="index.php">Inicial</a>
    |
    <a href="produtos.php">Produtos</a>
    <h1> <?php echo $titulo; ?></h1>
    <p> <?= $msg; ?></p>
    
    <h2>Produtos</h2>
    <ul>
        <li>Produto 1</li>
        <li>Produto 2</li>
    </ul>
</body>
</html>
