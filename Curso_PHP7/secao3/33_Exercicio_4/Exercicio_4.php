<?php

/*
Crie um arquivo PHP
Imprima três floats
Utilize a função is_float em um deles
*/ 

 $num = 0.123456789;

    echo 12.236589;
    echo "<br>";
    echo 1.25;
    echo "<br>";
    echo $num;

    echo "<br><br>O $num ";

    if (is_float($num)){
        echo "É um número Décimal!";
    }else {
        echo "NÃO É UM número Décimal!";
    }