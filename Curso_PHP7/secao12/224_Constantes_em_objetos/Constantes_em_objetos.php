<?php
    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;
    }

    $matheus = new Humano;

    echo $matheus::OLHOS . "<br>";