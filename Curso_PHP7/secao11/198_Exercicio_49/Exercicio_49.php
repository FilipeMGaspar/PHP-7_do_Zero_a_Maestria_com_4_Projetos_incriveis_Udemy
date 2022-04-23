<?php
    /**
    *  Crie variaveis com caracteristicas de algum objeto ou animal
    *  
    *  Depois crie um array utilizando o método compact com as variaveis criadas na alinie anterior
    * 
    * Faça um loop no array e imprima os valores
    */

    $raca = "Pastor alemão";
    $corPelo = "Castanho";
    $peso = 65.3;
    $numPatas = 4;

    $animal = compact("raca", "corPelo", "peso");