<?php
    /**
     *  Crie uma classe Pessoa
     *  Crie a propriedade nome e idade
     *  Crie também um método andar
     */

     class Pessoa{
         public $nome;
         public $idade;

         function andar($m){
            echo "Andou $m metros <br>";
         }
     }

     $joao = new Pessoa;
     $joao->nome = "João";
     $joao->idade = 25;
     echo "O $joao->nome tem $joao->idade<br>";