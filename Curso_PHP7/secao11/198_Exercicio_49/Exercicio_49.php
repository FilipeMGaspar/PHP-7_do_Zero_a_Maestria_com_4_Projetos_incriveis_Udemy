<?php
    /**
    *  Crie variaveis com caracteristicas de algum objeto ou animal
    *  
    *  Depois crie um array utilizando o método compact com as variaveis criadas anteriormente
    * 
    * Faça um loop no array e imprima os valores
    */

    $raca = "Pastor alemão";
    $corPelo = "Castanho";
    $peso = 65.3;
    $numPatas = 4;

    $animais = compact("raca", "corPelo", "peso", "numPatas");

    print_r($animais);
    echo "<br><br>";

    foreach($animais as $caracteristica => $value){
        echo "$caracteristica : $value <br><br>";
    }