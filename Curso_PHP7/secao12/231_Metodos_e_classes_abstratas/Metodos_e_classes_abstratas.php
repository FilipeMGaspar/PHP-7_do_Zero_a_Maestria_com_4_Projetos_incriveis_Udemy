<?php

    abstract class Teste {

        public static function testandoClasseAbstrata(){
            echo "Este método é de uma classe abstrata <br>";
        }

        abstract public function testeAbs();
    }

    class Nova extends Teste {
        public function testeAbs() {
            echo "Teste método abstato <br>";
        }
    }

    //$t = new Teste;
    Teste::testandoClasseAbstrata();

    $n = new Nova;
    