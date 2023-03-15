<?php
    require('pdo.inc.php');

    $sql = $pdo -> query('SELECT username FROM usuarios WHERE active=1');

    while ($usuario=$sql -> fetch(PDO::FETCH_ASSOC)) {
        echo "<p> {$usuario['username']}</p>";
    }
  
?>
<form action ="usuario_adicionar.php" method="post">
    <p><input type="text" name="username"></p>
    <p><input type="password" name="password"></p>
        <p><label>
            <input type="checkbox" name ="admin"> Admin
        </label></p>
        <p> <input type="submit" value="Gravar"> </p>
</form>

