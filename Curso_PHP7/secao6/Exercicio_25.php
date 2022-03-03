<?php
    /*
    Crie variáveis com números e outras com string
    Faça um if checando se é um número, caso for, atribua a multiplicação deste número por 2 em outra variável
    E crie um outro if, que checa se o novo número é maior que 100
    Se sim, imprima uma mensagem
    */ 

    $num = 50;

    $num1 = 65;

    $txt = "Uma Palavra!";

    $frase = "Curso de PHP 7";

    if(is_int($num)){
        $mult = $num * 2;
        if($mult > 100){
            echo "$num * 2 é maoir que 100! <br><br>";
        }
    }

    if(is_int($num1)){
        $mult = $num1 * 2;
        if($mult > 100){
            echo "$num1 * 2 é maoir que 100! <br><br>";
        }
    }

    if(is_int($txt)){
        $mult = $txt * 2;
        if($mult > 100){
            echo "$txt * 2 é maoir que 100! <br><br>";
        }
    }