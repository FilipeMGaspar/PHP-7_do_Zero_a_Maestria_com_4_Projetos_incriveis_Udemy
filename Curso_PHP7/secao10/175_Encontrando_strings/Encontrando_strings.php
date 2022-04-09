<?php

/**
 *      strpos    procura texto dentro da string
 */

$str = "estamos testando o método strpos, com strpos podemos emcontrar palavras nas Strings";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar = strpos($str, "java");

echo $testeEncontrar . "<br>";

if($testeEncontrar == false){
    echo "Palavra <strong>java</strong> não encontrada na string: <br> $str <br>";
}

$palavra = "com";

$testeEncontrar = strpos($str, $palavra);
echo $testeEncontrar . "<br>";