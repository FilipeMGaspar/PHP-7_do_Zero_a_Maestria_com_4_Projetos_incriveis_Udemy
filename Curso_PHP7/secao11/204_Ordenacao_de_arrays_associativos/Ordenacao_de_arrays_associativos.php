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
    echo "Ordem crescente <br>";
    print_r($arr);
    echo "<br><br>";

    arsort($arr);
    echo "Ordem decrescente <br>";
    print_r($arr);
    echo "<br>";