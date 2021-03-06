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
    echo "<strong>Ordem crescente:</strong><br>";
    print_r($arr);
    echo "<br><br>";

    arsort($arr);
    echo "<strong>Ordem decrescente:</strong><br>";
    print_r($arr);
    echo "<br><br>";

    ksort($arr);
    echo "<strong>Ordem crescente alfabética do valor das chaves:</strong><br>";
    print_r($arr);
    echo "<br><br>";

    krsort($arr);
    echo "<strong>Ordem decrescente alfabética do valor das chaves:</strong><br>";
    print_r($arr);
    echo "<br>";