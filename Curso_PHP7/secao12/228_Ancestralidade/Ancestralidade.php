<?php
    class Humano {

    }

    class Animal {

    }

    $marcos = new Humano;

    if($marcos instanceof Humano){
        echo "Marcos é um Humano <br>";
    }

    $turca = new Animal;

    if($turca instanceof Humano){
        echo "turca é um Humano <br>";
    } else {
        echo "turca Não é um Humano <br>";
    }