<?php
    /**
     *  Crie uma classe Cachorro com propriedades
     *  Inicie as propriedades via construtor;
     *  Crie um método para exebir cada uma das propriedades que voce vriou
     */

     class Cachorro {
         private $raca;
         private $cor;
         private $idade;

         public __construct($raca, $cor, $idade){
            $this->raca = $raca;
            $this->cor = $cor;
            $this->idade = $idade;
         }
     }