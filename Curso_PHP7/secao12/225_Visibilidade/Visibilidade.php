<?php
    class Car{
        public $rodas = 4;
        public $vidro = "Sem Pelicula";
    }

    class Mecanico{
        public function alterarRodas($obj){
            $obj->rodas = 10;
        }
    }

    $carro = new Car;
    echo $carro->rodas . "<br>";

    $matheus = new Mecanico;
    $matheus->alterarRodas($carro);
    echo $carro->rodas . "<br>";