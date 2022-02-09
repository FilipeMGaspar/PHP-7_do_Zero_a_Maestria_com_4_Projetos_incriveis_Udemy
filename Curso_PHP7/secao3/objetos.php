<?php

    class Pessoa {

        function falar(){
            echo "Olá pessoal";
        }
    }

    $lucas = new Pessoa();

    $lucas->nome = "Lucas";

    echo $lucas->nome;

    echo "<br><br>";

    $lucas->falar();