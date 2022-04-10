<?php
    // strrpos  

    $str = "Testando encontrando a palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");

    echo $palavra . "<br>";

    $palavra = strpos($str, "teste");

    echo $palavra . "<br>";

    if(strrpos($str, "Java") === false) {
        echo "A palavra 'Java' não foi encontrada";
    }

    $palavra = substr($str, strpos($str, "teste"), 5);

    echo $palavra . "<br>";