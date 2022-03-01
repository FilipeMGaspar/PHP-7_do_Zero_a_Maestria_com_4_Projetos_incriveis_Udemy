<?php

 /*
 Crie variavés que recebma idades

 verifique se as idades são maiores ou iguais a 18

 se sim, imprima uma mensagem que a pesso é maior de idade
 */ 
    $idade = 25;
    $idade1 = 16;
    $idade2 = 50;

    if($idade >= 18){ //True
        echo "Você tem $idade anos, logo é maior de idade!";
        echo "<br><br>";
    }

    if($idade1 >= 18){ //False
        echo "Você tem $idade1 anos, logo é maior de idade!";
        echo "<br><br>";
    }

    if($idade2 >= 18){ //False
        echo "Você tem $idade2 anos, logo é maior de idade!";
        echo "<br><br>";
    }