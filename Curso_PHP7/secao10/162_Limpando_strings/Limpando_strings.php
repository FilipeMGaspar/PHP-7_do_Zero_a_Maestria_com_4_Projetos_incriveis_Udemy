<?php
    /*
    *   trim    limpa espaços antes e depois da string
    *
    *   ltrim   limpa espaços da parte inicial da string
    *
    *   rtrim   limpa espaços da parte final da string
    */

        $frase = "        Filipe              ";

        echo "Esta é a string 1: $frase!<br>";

        $fraseLimpa = trim($frase);
        echo "Esta é a string 1 limpa com o trim: $fraseLimpa!<br>";

        $fraseLimpa2 = rtrim($frase);
        echo "Esta é a string 1 limpa com o rtrim: $fraseLimpa2!<br>";