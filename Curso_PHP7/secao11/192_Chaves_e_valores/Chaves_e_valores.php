<?php
    //array_key   -> cria um array apenas com as chaves de um array

    //array_values  -> cria um array apenas com os valores de um array

    $carro = [
        "marca" => "Peugeot",
        "motor" => "2.0",
        "teto_solar" => true,
        "caixa" => "Manual",
        "portas" => 4
    ];

    $chaves = array_key($carro);
    print_r($chaves);
    echo "<br><br>";