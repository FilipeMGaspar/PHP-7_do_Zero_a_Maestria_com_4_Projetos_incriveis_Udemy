<?php

    $teste = "KLM";

    echo "<br> $teste Global 1 <br>";

    if(5 > 2){
        $teste = "METRO";

        echo "<br> $teste Dentro do if <br>";
    }

    echo "<br> $teste Global 2 <br>";

    function funcao(){

        $teste = 123456;
        echo "<br> $teste Local <br>";
    }

    funcao();

    function testando(){

        global $teste;
        $teste = 25;
        echo "<br> $teste Global Dentro de uma função <br>";
    }

    testando();

    echo "<br> $teste Global 3 <br>";