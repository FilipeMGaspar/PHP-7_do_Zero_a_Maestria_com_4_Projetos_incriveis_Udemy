<?php

    $teste = "asd";

    echo "<br> $teste Global 1 <br>";

    if(5 > 2){
        $teste = "dsa";

        echo "<br> $teste Dentro do if <br>";
    }

    echo "<br> $teste Global 2 <br>";

    function funcao(){

        $teste = 123456;
        echo "<br> $teste Dentro de uma função <br>";
    }

    funcao();

    function testando(){

        $teste = 123456;
        echo "<br> $teste Dentro de uma função <br>";
    }