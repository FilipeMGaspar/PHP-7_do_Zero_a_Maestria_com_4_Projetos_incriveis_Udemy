<?php
    /**
     *  Crie uma classe Humano com algumas propriedades e o método falar;
     *  Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe
     * Exiba os valores das propriedades da classe pais e também utilize os métodos
     */

     class Humano {
         public $bracos = 2;
         public $pernas = 2;

         public function falar(){
             echo "Olá! É um prazer. Seja bem vindo!<br>";
         }
     }

     class Professor extends Humano {
        public $disciplina;

        function lecionar(){
            echo "Estou a lecionar a disciplina de $this->disciplina <br>";
        }
     }

     $joao = new Professor;
     $joao->disciplina = "Matemática";
     $joao->falar();
     $joao->lecionar();