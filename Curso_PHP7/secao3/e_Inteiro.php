<?php
    $num1 = 5.5;
    $num2 = 100;

    echo "O número $num1 é um número ";

    if(is_int($num1)){
        echo "inteiro!";
    }else{
        echo "decimal!";
    }