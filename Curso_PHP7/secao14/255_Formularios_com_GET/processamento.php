<?php
    print_r($_GET);
    echo "<br><br>";
    
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo "<p>Olá $nome. Você tem $idade anos. Certo?</p>";

?>