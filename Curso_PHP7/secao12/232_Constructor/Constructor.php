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