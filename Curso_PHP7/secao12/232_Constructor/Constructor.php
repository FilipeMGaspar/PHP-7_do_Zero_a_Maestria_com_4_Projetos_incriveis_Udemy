<?php
    class Car {
       public $portas;
       public $cor;
       public $marca;

       function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
       }
    }

    $ferrari = new Car(4, "Vermelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor<br>";

    $bmw = new Car(2, "Cinza", "BMW");
    echo "É um carro de $bmw->portas portas, da marca $bmw->marca de cor $bmw->cor<br>";