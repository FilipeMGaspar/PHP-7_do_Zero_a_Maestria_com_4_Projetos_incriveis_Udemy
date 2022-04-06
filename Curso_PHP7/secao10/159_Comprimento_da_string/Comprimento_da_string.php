<?php
    $nome = "Filipe";
    $str = "Esta String é muito grande";

    echo "O nome $nome, tem " . strlen($nome) . " letras <br>";
    echo "Número de Letras = " . strlen($str) . "<br>";

    $len1 = strlen($nome);
    $len2 = strlen($str);

    if($len1 > $len2){
        echo "A string '$nome' é maoir que a string '$str' <br>";
    }else {
        echo "A string '$str' é maoir que a string '$nome' <br>";
    }