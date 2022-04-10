<?php
    // strrpos  

    $str = "Testando encontrando a palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");

    echo $palavra . "<br>";

    $palavra = strpos($str, "teste");

    echo $palavra . "<br>";