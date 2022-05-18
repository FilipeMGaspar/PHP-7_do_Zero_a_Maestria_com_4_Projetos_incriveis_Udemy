<?php

    class Humano {
        public $idade;
        public $nome;
        public $profissao;
    }

    if(class_exists("Humano")) {
        echo "A classe existe <br>";
    } else {
        echo "A classe não existe <br>";
    }

    if(class_exists("Cachorro")) {
        echo "A classe existe <br>";
    } else {
        echo "A classe não existe <br>";
    }

