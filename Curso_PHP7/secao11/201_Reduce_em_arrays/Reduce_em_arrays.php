<?php
    $arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

    function soma($a, $b){
        return $a + $b;
    }

    function subtracao($a, $b){
        return $a - $b;
    }

    $resultado = array_reduce($arr, "soma");
    echo "Soma = $resultado <br>";

    $resultado = array_reduce($arr, "subtracao");
    echo "Subtração = $resultado <br>";