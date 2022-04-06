<?php
    $frase = "Esta é uma string muito grande, ela tem vários caracteres";

    for($i = 0; $i < strlen($frase); $i++){
        echo "$frase[$i] <br>";
    }