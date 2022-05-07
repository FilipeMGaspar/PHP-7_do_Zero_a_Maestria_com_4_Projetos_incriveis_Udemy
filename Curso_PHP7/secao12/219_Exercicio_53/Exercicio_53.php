<?php
/**
 *  Crie uma classe Cachorro
 *  Crie o método latir e andar
 *  Execute o método em novas instancias da classe
 */

    class Cachorro{
        function latir(){
            echo "ão, ão, ão, auuuuuuuuuuu <br>";
        }

        function andar($d){
            echo "O cachorro andou $d metros<br>";
        }
    }

    $boby = new Cachorro; 
    $boby->latir();
    $boby->andar(3);