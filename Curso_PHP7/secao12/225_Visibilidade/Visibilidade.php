<?php
    class Car{
        public $rodas = 4;
        public $vidro = "Sem Pelicula";
    }

    class Mecanico{
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;
    echo $carro->rodas . "<br>";

    $matheus = new Mecanico;
    $matheus->alterarRodas($carro);
    echo $carro->rodas . "<br>";

    echo $carro->vidro . "<br>";
    $matheus->colocarPelicula($carro, "Pelicula G20");
    echo $matheus->vidro . "<br>";