<?php

/**
 *      strpos    procura texto dentro da string
 */

$str = "estamos testando o método strpos, com strpos podemos emcontrar palavras nas Strings";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar = strpos($str, "melga");

echo $testeEncontrar . "<br>";