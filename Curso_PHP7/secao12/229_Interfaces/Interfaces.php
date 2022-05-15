<?php
   
   interface Caracteristicas {
         const nome = "Matheus";

        public function falar();
    }

    class Humano implements Caracteristicas {
        public $idade = 29;
       
        public function falar(){
            echo "Olá, Mundo! <br>";
        }

        public function dizerNome(){
            
        }
    }

    $matheus = new Humano;
    $matheus->falar();