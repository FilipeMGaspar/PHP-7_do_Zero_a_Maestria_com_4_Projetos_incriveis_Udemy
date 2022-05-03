<?php
    // arsort   Ordem crescente pelo valor das chaves

    // ksort   Ordenado pelas chaves

    $arr = [
        "Matheus" => 29,
        "Luisa" => 14,
        "Pedro" => 18,
        "Maria" => 12
    ];

    asort($arr);
    print_r($arr);
    echo "<br>";