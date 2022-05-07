<?php

    class Pessoa{

        function falar(){
            echo "Olá, eu sou um objeto <br>";
        }

        function somar($n, $n1){
            echo $n + $n1 . "<br>";
        }
    }

    $matheu = new Pessoa;
    $matheu->falar();
    $matheu->falar();
    $matheu->somar(2, 5);

    $joao = new Pessoa;
    $joao->falar();