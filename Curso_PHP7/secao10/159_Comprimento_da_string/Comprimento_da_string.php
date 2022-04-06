<?php
    $nome = "Filipe";
    $str = "Esta String é muito grande";

    echo "O nome $nome, tem " . strlen($nome) . " letras <br><br>";
    echo "Número de Letras = " . strlen($str) . "<br><br>";

    $len1 = strlen($nome);
    $len2 = strlen($str);

    if($len1 > $len2){
        echo "A string '$nome' é maior que a string '$str' <br>";
    }else {
        echo "A string '$str' é maior que a string '$nome' <br>";
    }