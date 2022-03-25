<?php
/*
*   Crie uma função que recebe um número
*   Retorne o valor deste número ao quadrado
*/

    function numAoQuadrado($num){
        $result = $x ** 2;
        //return pow($num, 2);
        return $result;
    }

    echo numAoQuadrado(5);

    echo "<br><br>";
    $n = 2;
    $n1 = numAoQuadrado($n);
    echo $n1;

    echo "<br><br>";