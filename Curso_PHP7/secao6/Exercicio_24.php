<?php
/*
Crie algumas variáveis com tipos de dados diferentes: String, int e boolean, por exemplo;
Verifique se a variavél é um inteiro
Se sim, apresenta uma mensagem confirmando o tipo de dado
se não, apresenta outra mensagem
*/ 

$num = 256;

$txt = "Texto";

$check = true;

if(is_int($num)){
    echo "$num, <strong>É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
} else {
    echo "$num, <strong>NÃO É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
}

if(is_int($txt)){
    echo "'$txt', <strong>É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
} else {
    echo "'$txt', <strong>NÃO É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
}

if(is_int($check)){
    echo "'$check', <strong>É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
} else {
    echo "'$check', <strong>NÃO É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
}