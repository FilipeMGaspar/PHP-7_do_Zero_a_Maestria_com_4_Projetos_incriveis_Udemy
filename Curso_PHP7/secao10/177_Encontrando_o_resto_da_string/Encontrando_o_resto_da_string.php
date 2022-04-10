<?php
    //   strstr

    $str = "testando o resto da string, para ver se dá certo";

    $resto = strstr($str, "resto");

    echo $resto . "<br>";

    $s = "string";
    $resto = strstr($str, $s);

    echo $resto . "<br>";