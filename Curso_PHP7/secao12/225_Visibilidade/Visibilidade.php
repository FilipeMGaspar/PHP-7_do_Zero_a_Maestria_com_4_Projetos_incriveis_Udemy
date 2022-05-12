<?php
    class Car{
        public $rodas = 4;
        private $vidro = "Sem Pelicula";

        public function peliculaDeFabrica($pelicula) {
            $this->vidro = $pelicula;
        }
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

    // não pode ser alterado pois é privado
    //echo $carro->vidro . "<br>";
    //$matheus->colocarPelicula($carro, "Pelicula G20");
    //echo $carro->vidro . "<br>";

    $carro->peliculaDeFabrica("G10");
    echo $carro->vidro . "<br>"; 