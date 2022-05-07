<?php

    class Pessoa{

        function falar(){
            echo "Olá eu sou um objeto <br>";
        }
    }

    $matheu = new Pessoa;
    $matheu->falar();