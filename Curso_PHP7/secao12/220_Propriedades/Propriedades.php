<?php
    class Car{
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Vermelho";
    }

    $ferrari = new Car;
    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas ."<br>";
    $ferrari->cor="Azul";