<?php
    // in_array     in_array("item", $arr);

    $arr = ["Banana", "Maçã", "Batata", "Pera", "Mamão"];
    
    $busca = "Batata";
    if(in_array($busca, $arr)){
        echo "O item <strong>$busca</strong> foi encontrado no array!<br>";
    } else {
        echo "O item <strong>$busca</strong> Não foi encontrado array!<br>";
    }

    echo "<br>";
    $busca = "Banana";
    if(in_array($busca, $arr)){
        echo "O item <strong>$busca</strong> foi encontrado no array!<br>";
    } else {
        echo "O item <strong>$busca</strong> Não foi encontrado array!<br>";
    }

    echo "<br>";
    $busca = "Feijão";
    if(in_array($busca, $arr)){
        echo "O item <strong>$busca</strong> foi encontrado no array!<br>";
    } else {
        echo "O item <strong>$busca</strong> não foi encontrado array!<br>";
    }