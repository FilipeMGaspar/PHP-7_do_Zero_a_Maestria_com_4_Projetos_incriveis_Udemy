<?php

    $arr = ["Texto", 100, 12.6, 'c', true, "Melga", 78, "frase", 78.269, "String"];

    $i = 0;

    while ($i < 10) {
        if(is_string($arr[$i])){
            echo  $arr[$i]. " <br>";
        }
        $i++;
    }