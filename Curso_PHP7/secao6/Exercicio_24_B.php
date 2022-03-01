<?php
/*
Crie uma variavel que receba um peso
se peso maior que 80, imprima uma mensagem que está pesado de mais

se não, imprima "Peso dentro do limite"
*/ 

$peso = 80.2;

if($peso > 80){
    echo "o seu peso atual é de $peso Kg. Infelizmento encontra-se acima do peso ideal!";
    echo "<br><br>";
} else {
    echo "o seu peso atual é de $peso Kg. Encontra-se no peso ideal!";
    echo "<br><br>";
}

$peso = 75;

if($peso > 80){
    echo "o seu peso atual é de $peso Kg. Infelizmento encontra-se acima do peso ideal!";
    echo "<br><br>";
} else {
    echo "o seu peso atual é de $peso Kg. Encontra-se no peso ideal!";
    echo "<br><br>";
}