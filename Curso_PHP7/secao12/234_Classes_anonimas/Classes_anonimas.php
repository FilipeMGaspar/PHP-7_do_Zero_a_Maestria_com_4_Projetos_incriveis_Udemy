<?php
    $pessoa = new class() {
        $nome = matheus;

        public function dizernome(){
            echo "olá o meu nome é $this->nome <br>";
        }
    };