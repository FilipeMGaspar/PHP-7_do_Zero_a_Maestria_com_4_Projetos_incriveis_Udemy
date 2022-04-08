<?php
    /*
    *   substr(str, inici, fim);
    *
    *   str é a string que vamos procurar algo
    *
    *   inicio é o indice inicial de palavra ou texto
    *
     *  fim é o indice final da palavra ou texto   
    */
    
    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5);

    echo $str . "<br><br>";

    echo $minha . "<br>";