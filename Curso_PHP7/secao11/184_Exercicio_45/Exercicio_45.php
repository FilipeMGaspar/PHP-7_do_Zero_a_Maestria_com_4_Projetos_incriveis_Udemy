<?php
    /**
     * Crie um array com a função range de 10 a 45
     * Imprima todos os números com uma soma de 6
     * Se a soma passar de 30, imprima também que o número é muito alto
     */

    $arr = range(10, 45); // Array de 10 a 45
    $soma = 0;
    
    for($i = 0; $i <count($arr); $i++){
        if($arr[$i] + 6 <= 30){
            echo $arr[$i] + 6 . "<br>";
        } else{
            echo $arr[$i] + 6 . "É um número alto! <br>";
        }
    }