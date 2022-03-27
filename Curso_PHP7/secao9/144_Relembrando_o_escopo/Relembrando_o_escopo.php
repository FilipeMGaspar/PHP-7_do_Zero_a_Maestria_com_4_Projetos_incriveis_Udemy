<?php

    $a = 10;

    function testeEscopo(){
        $a = 5;

        echo "ESCOPO LOCAL DE $a <br><br>";
    }

    echo "ESCOPO GLOBAL DE $a <br><br>";

    testeEscopo();