<?php
    class Humano {

        public function falar(){
            echo "Olá <br>";
        }
    }

    $matheus = new Humano;

    if(is_object($matheus)){
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }