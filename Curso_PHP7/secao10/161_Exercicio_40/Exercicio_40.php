<?php
/*
*   Percorra a string:
*               "O rato roeu a roupa do rei de Roma"
*
*   A partir de um loop, imprima o número de letras "a" desta string
*/ 

    $frase = "O rato roeu a roupa do Rei de Roma";
    $numDeA = 0;

    echo "A frase '$frase'<br>"
    for($i = 0 ; $i < strlen($frase); $i++){
        if($frase[$i] === "a"){
            $numDeA++;
        }
    }

    echo "Tem $numDeA letras 'a'";