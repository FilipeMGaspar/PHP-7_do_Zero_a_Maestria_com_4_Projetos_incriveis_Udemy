<?php
    /**
     *      ucfirst - primeira letra da string em maiúscula
     *      ucwords - primeira letra de cada palavra maiúscula
     */

    $frase = "esta frase tem todas as letras minusculas";
    $frase2 = "Esta frase tem a primeira letra com maiuscula";
    $frase3 = "testando o case de uma frase com letras minusculas";

    // Primeira letra maiúsculo
    echo ucfirst($frase). "<br>";
    echo ucfirst($frase2). "<br>";

    // Todas as palavras com as iniciais maiúsculas
    echo ucwords($frase3) . "<br>";
    echo ucwords($frase2) . "<br>";