<?php

/**
 *  Crie um array com os valores:
 *      batata, maçã, pera, feijão, arroz
 *  Remova pera e jeijão
 */

    $produtos = ["Batata", "Maçã", "Pera", "Feijão", "Arroz"];

    $removidos = array_splice($produtos, 3);

    print_r($removidos);
    echo "<br><br>";
    print_r($produtos);
    echo "<br><br>";