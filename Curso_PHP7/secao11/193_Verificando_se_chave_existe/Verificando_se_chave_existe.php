<?php
    // array_key_exits

    $arr = [
        "nome" => "Filipe",
        "idade" => 37
    ];

    if(array_key_exists("nome", $arr)){
        echo "A chave existe! <br>";
    } else{
        echo "A Chave não existe!<br>";
    }

    if(array_key_exists("profissao", $arr)){
        echo "A chave existe! <br>";
    } else{
        echo "A Chave não existe!<br>";
    }