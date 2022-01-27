<?php
    $num1 = 5.5;
    $num2 = 100;

    echo "O número $num2 é um número ";

    if(is_int($num2)){
        echo "inteiro!";
    }else{
        echo "decimal!";
    }