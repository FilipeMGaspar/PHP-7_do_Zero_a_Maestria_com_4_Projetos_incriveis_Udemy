<?php

    $i = 1; //Primeiro contador

    while($i <= 10){
        echo "Loop Externo : $i <br>";       
 
        $j = 1; // Segundo contador
        while($j <= 5){
            echo "Loop Interno = $j <br>";
            $j++; // Incremento do Segundo contador
        }

        $i++; // Incremento do primeiro contador
    }