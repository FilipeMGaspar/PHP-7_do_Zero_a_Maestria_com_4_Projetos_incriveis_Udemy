<?php
    /**
     *  Crie uma classe Carro
     *  Crie algumas propriedades e também a propriedade velocidade_maxima
     *  Crie o método setVelocidadeMaxima, onde é possivel alterar a velocidade máxima do carro
     *  e também getVelocidadeMáxima onde é possivel imprimeir a velocidade do carro
     */

     class Carro {
        public $marca;
        public $modelo;
        public $cor;
        public $velocidade_maxima;

        function setVelocidadeMaxima($velMax) {
            $this->velocidade_maxima = $velMax;
        }

        function getVelocidadeMaxima(){
            return $this->velocidade_maxima;
        }
     }

     $peugeot = new Carro;
     $peugeot->marca = "Peugeot";
     $peugeot->modelo = "306 2.0 HDI";
     $peugeot->cor = "Azul cinsa"
     $peugeot->setVelocidadeMaxima(180);
     
     echo $peugeot->marca;
     