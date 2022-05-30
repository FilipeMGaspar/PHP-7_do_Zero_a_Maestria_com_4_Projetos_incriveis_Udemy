<?php
    print_r($_GET);
    echo "<br><br>";
    $nome = $_GET['nome'];

?>
<h1>Olá <?= $nome;?>, seja bem vindo!</h1> 