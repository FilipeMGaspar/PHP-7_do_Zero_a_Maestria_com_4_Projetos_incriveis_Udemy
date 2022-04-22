<?php

/**
 *  Crie um array com os valores:
 *      batata, maçã, pera, feijão, arroz
 *  Remova pera e jeijão
 */

    $produtos = ["Batata", "Maçã", "Pera", "Feijão", "Arroz"];

    $removidos = array_splice($produtos, 3);

    echo "Lista de itens removidos <br>";
    print_r($removidos);
    echo "<br><br>";
    echo "Array original <br>";
    print_r($produtos);
    echo "<br><br>";