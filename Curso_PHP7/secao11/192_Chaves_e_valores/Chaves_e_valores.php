<?php
    //array_keys   -> cria um array apenas com as chaves de um array

    //array_values  -> cria um array apenas com os valores de um array

    $carro = [
        "marca" => "Peugeot",
        "motor" => "2.0",
        "teto_solar" => true,
        "caixa" => "Manual",
        "portas" => 4
    ];

    $chaves = array_keys($carro);
    print_r($chaves);
    echo "<br><br>";

    $valores = array_values($carro);
    print_r($valores);
    echo "<br><br>";