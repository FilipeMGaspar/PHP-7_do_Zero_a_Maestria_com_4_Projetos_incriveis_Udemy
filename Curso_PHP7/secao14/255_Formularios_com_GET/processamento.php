<?php
    print_r($_GET);
    echo "<br><br>";
    
    if(isset($_GET['nome']) && isset($_GET['idade'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    } else {
        $nome = "Sem nome";
        $idade = 0;
    }

    echo "<p>Olá $nome. Você tem $idade anos. Certo?</p>";

?>

<h3>O seu nome é <?= $nome?>, e tem <?= $idade?> anos</h3>