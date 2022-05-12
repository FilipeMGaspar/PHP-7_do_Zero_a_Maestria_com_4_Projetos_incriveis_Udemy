<?php
    class Car{
        public $rodas = 4;
        public $vidro = "Sem Pelicula";
    }

    class Mecanico{
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro) {
            $carro->$vidro = "Pelicula Antracite";
        }
    }

    $carro = new Car;
    echo $carro->rodas . "<br>";

    $matheus = new Mecanico;
    $matheus->alterarRodas($carro);
    echo $carro->rodas . "<br>";