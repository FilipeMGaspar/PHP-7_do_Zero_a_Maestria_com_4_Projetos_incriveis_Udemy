<?php
    class Humano {
        public $idade = 29;

        public function falar(){
            echo "Olá, Mundo! <br>";
        }
    }

    class Programador extends Humano {

    }

    $ze = new Humano;
    $ze->falar();