<?php
    class Humano {
        public $idade = 29;

        public function falar(){
            echo "Olá, Mundo! <br>";
        }
    }

    $ze = new Humano;
    $ze->falar();