<?php

    function teste(){
        $a = 0;
        $a++;

        echo "$a <br><br>";
    }

    teste();

    teste();

    teste();

    function testeStatic(){
       static $a = 0;
        $a++;

        echo "$a <br><br>";
    }

    testeStatic();

    testeStatic();

    testeStatic();