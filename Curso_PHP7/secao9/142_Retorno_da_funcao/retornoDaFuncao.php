<?php
   
    function soma($n1, $n2){
        return $n1 + $n2;
    }

    function testeRetorno() {
        return "Testando!";
    }

    echo "<br><br>";
    echo soma(25, 30);
    
    echo "<br><br>";
    $x = soma(3, 5);    
    echo $x;

    echo "<br><br>";
    $y = soma($x, 11);
    echo $y;

    echo "<br><br>";
    $z = testeRetorno();
    echo $z;