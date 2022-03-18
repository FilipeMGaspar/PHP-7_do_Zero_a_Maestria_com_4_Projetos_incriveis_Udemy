<?php
    /*
    *   Crie um array com strings
    *   utilize a função implode no array
    *   Primeiro argumento: ","
    *   Segundo argumento: o seu array
    *   Atribua a invocação da função a uma variavel
    *   Exiba o resultado
    */

    $plvr = ["Olá","seja!", "Bem", "Vindo"];

    $texto = implode(",", $plvr);

    echo $texto;