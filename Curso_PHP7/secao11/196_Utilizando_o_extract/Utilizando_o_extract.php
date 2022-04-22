<?php
    // extract

    $arr = [
        "cor" => "Vermelho",
        "forma" => "Retangular",
        "material" => "aço"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";