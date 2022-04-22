<?php
    // extract

    $arr = [
        "cor" => "Vermelho",
        "forma" => "Retangular",
        "material" => "Aço"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Filipe";

    $pessoa = [
        "nome" => "Miguel",
        "idade" => 37
    ];

    extract($pessoa);