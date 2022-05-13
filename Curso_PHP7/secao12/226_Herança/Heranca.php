<?php
    class Humano {
        public $idade = 29;

        public function falar(){
            echo "Olá, Mundo! <br>";
        }

        private function grtitar(){
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessaGritar(){
            $this->gritar();
        }

        protected function falrBaixinho(){
            echo "sussurro ... <br>";
        }
    }

    class Programador extends Humano {

    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessaGritar();
    $ze->falrBaixinho();

    $matheus = new Programador;
    echo $matheus->idade . "<br>";
    $matheus->falar();
    $matheus->acessaGritar();