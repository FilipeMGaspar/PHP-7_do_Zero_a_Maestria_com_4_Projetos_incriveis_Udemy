<?php

    $a = 10;

    $b = 15;

    function testeEscopo(){
        $a = -5;
        global $b;
        static $c = 0;

        $a++;    
        
        $c += 3;   

        echo "ESCOPO LOCAL DE A: $a <br><br>";

        echo "ESCOPO GLOBAL NA FUNÇÃO DE B:  $b <br><br>";

        echo "ESCOPO STATIC DE C: $c <br><br>";

        $b += 15;
    }

    echo "ESCOPO GLOBAL DE A: $a <br><br>";
    echo "ESCOPO GLOBAL DE B: $b <br><br>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B: $b <br><br>";

    testeEscopo();