<?php
   
   interface Caracteristicas {
        public function falar();
    }

    class Humano implements Caracteristicas {
        public $idade = 29;
        public function falar(){
            echo "Olá, Mundo! <br>";
        }
    }

    $matheus = new Humano;
    $matheus->falar();