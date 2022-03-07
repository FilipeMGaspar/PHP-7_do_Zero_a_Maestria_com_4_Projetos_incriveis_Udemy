<?php

    echo "<br><br>";

    $arr = ["Texto", 100, 12.6, 'Comentário', true, "Melga", 78, "Frase", 78.269, "String"];

    $i = 0;

    while ($i < 10) {
        if(is_string($arr[$i])){
            echo  $arr[$i]. " <br>";
        }
        $i++;
    }