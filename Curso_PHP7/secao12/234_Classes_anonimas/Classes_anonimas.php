<?php
    $pessoa = new class() {
        $nome = matheus;

        public function dizerNome(){
            echo "olá o meu nome é $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();