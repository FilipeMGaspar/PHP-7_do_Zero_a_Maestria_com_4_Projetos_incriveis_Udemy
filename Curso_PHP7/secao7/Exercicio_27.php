<?php

    echo "<br><br>";

    $arr = ["Texto", 100, 12.6, false, true, [], 78, "Frase", 78.269, "String"];

    $i = count($arr); // Vai receber 
    
    $conta = 0;

    while ($conta < $i) {
        if(is_string($arr[$conta])){
            echo  $arr[$conta]. " <br>";
        }
        $conta++;
    }