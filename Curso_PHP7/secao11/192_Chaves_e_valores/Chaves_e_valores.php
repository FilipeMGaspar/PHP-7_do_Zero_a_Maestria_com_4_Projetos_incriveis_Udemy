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

    $chaves = array_keys($carro);  //Retorna as chaves do array
    print_r($chaves);
    echo "<br><br>";

    $valores = array_values($carro); //Retorna os valores 
    print_r($valores);
    echo "<br><br>";