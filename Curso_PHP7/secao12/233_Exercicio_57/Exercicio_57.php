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

        function __construct($raca, $cor, $idade){
            $this->raca = $raca;
            $this->cor = $cor;
            $this->idade = $idade;
        }

        public function mostrarDados() {
            echo "Raça ..: $this->raca <br>";
            echo "Cor do Pelo ..: $this->cor <br>";
            echo "Idade ..: $this->idade anos <br>";
        }
    }

    $boby = new Cachorro("Rafeiro", "Beje", 2);
    $boby->mostrarDados();

    echo "<br>";
    $max = new Cachorro("Pastor Alemão", "CAstanho", 1);
    $max->mostrarDados();