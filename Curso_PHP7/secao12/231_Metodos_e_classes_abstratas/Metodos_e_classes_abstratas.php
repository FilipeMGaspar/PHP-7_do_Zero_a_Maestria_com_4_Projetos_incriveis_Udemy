<?php

    abstract class Teste {

        public static function testandoClasseAbstrata(){
            echo "Este método é de uma classe abstrata <br>";
        }
    }

    //$t = new Teste;
    Teste::testandoClasseAbstrata();