<?php

    abstract class Teste {

        public static function testandoClasseAbstrata(){
            echo "Este método é de uma classe abstrata <br>";
        }

        abstract public function testeAbs();
    }

    class Nova extends Teste {

    }

    //$t = new Teste;
    Teste::testandoClasseAbstrata();

    $n = new Nova;