<?php
/*
*   Crie uma função que recebe um número
*   Retorne o valor deste número ao quadrado
*/

    function numAoQuadrado($num){
        $result = pow($num, 2);
        
        return $result;
    }

    echo numAoQuadrado(5);

    echo "<br><br>";
    $n = 12;
    $n1 = numAoQuadrado($n);
    echo $n1;

    echo "<br><br>";