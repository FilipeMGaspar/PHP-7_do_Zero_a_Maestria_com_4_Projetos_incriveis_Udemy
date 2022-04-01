<?php
    /*
    *   Crie uma função que receba um array de números
    *   Crie um novo array com apenas os números que são maiores que 7
    *   Retorne este novo arra e imprima na tela
    */

    function arrayMaoirQueSete ($a = []){
        $novoArray = [];
        foreach ($a as $elemento){
            if($elemento > 7){
                array_push($novoArray, $elemento); 
            }
        }

        return $novoArray;
    }

    $arr = [10, 2 , 8, 16, 5, 3, 6, 9, 25, 125, 1];
    arrayMaoirQueSete($arr);

    $arrayfun = arrayMaoirQueSete($arr);

    echo "<br>";
    foreach ($arrayfun as $elemento){
        echo "$elemento - ";
    }
    echo "Fim!";