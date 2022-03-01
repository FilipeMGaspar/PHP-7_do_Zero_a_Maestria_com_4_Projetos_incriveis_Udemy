<?php
/*
insira o valor 5 numa variável e o valor 3 noutra

Teste os operadores de:
    Igualdade
    Diferença
    Idêntico
    Não Idêntico
*/

$num = 5;
$num1 = 3;

if($num == $num1){
    echo "$num é igual a $num1 <br><br>";
}

if($num != $num1){
    echo "$num é diferente de $num1 <br><br>";
}

if($num === $num1){
    echo "$num é identico a $num1 <br<<br>";
}

if($num !== $num1){
    echo "$num não é identicao a $num1 <br><br>";
}