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

    echo $minha . "<br><br>";

    $str2 = "Testando esta string, mais";

    $novaString = substr($str2, 8);

    echo $novaString . "<br><br>";

    $novaString2 = substr($str2, 8, -4);

    echo $novaString2 . "<br><br>";