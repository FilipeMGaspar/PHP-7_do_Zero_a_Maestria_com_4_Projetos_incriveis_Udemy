<?php

    $i = 1;

    while($i <= 10){
        echo "Loop Externo : $i<br><br>";
        $i++;

        //segundo contador
        $j = 1;
        while($j <= 5){
            echo "Loop Externo : $j<br><br>";
            $j++;
        }
    }