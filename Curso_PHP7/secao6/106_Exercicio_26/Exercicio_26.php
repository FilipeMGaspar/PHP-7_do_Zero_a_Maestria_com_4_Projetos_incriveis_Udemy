<?php

/*
Crie uma variável que recebe uma velocidade de um carro
Depois crie uma estrutura if que verifica essa velocidade
Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta
Se igual a 40, imprima uma mensagem para o motorista tomar cuidado
Se for maior de 40, imprima uma mensagem de multa.
*/ 

$velAtualCarro = 35;

if($velAtualCarro < 40){
    echo "Velocidade atual : $velAtualCarro Km/h - Velocidade correta";
    echo "<br><br>";
} else if($velAtualCarro == 40){
    echo "Velocidade atual : $velAtualCarro Km/h - Atensão radar";
    echo "<br><br>";
} else {
    echo "Velocidade atual : $velAtualCarro Km/h -  Multado em 200€";
    echo "<br><br>"; 
}

$velAtualCarro = 40;

if($velAtualCarro < 40){
    echo "Velocidade atual : $velAtualCarro Km/h - Velocidade correta";
    echo "<br><br>";
} else if($velAtualCarro == 40){
    echo "Velocidade atual : $velAtualCarro Km/h - Atensão radar";
    echo "<br><br>";
} else {
    echo "Velocidade atual : $velAtualCarro Km/h -  Multado em 200€";
    echo "<br><br>"; 
}

$velAtualCarro = 45;

if($velAtualCarro < 40){
    echo "Velocidade atual : $velAtualCarro Km/h - Velocidade correta";
    echo "<br><br>";
} else if($velAtualCarro == 40){
    echo "Velocidade atual : $velAtualCarro Km/h - Atensão radar";
    echo "<br><br>";
} else {
    echo "Velocidade atual : $velAtualCarro Km/h -  Multado em 200€";
    echo "<br><br>"; 
}