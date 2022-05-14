<?php
    class Humano {

    }

    class Animal {

    }

    $marcos = new Humano;

    if($marcos instanceof Humano){
        echo "Marcos é um Humano <br>";
    } else {
        echo "Marcos não é um Humano <br>";
    }

    $turca = new Animal;

    if($turca instanceof Humano){
        echo "Turca é um Humano <br>";
    } else {
        echo "Turca não é um Humano <br>";
    }