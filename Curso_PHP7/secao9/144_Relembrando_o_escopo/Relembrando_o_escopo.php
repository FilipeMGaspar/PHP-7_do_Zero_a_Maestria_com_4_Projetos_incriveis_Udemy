<?php

    $a = 10;

    $b = 15;

    function testeEscopo(){
        $a = 5;
        global $b;

        $a++;

        $b += 15; 

        echo "ESCOPO LOCAL DE A: $a <br><br>";

        echo "ESCOPO GLOBAL NA FUNÇÃO DE $b <br><br>";
    }

    echo "ESCOPO GLOBAL DE A: $a <br><br>";
    echo "ESCOPO GLOBAL DE B: $b <br><br>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B: $b <br><br>";