<?php
    /*
    *   Crie uma função que receba um array de números
    *   Crie um novo array com apenas os números que são maiores que 7
    *   Retorne este novo arra e imprima na tela
    */

    function arrayMaoirQueSete ($RcbArray){
        $novoArray = [];
        foreach ($RcbArray as $elemento){
            if($elemento > 7){
                array_push($novoArray, $elemento); 
            }
        }

        return $novoArray;
    }

    $arr = [];

    for ($i = 0; $i <= 15; $i++){
        if($i % 2 == 0){
            array_push($arr, $i * 2);
        }else{
            array_push($arr, $i * 3);
        }
    }

    $arrayfun = arrayMaoirQueSete($arr);
    sort($arrayfun); // Coloca o array por ordem crescente
    
    echo "<br>";
    foreach ($arrayfun as $elemento){
        echo "$elemento - ";
    }
    echo "Fim!";