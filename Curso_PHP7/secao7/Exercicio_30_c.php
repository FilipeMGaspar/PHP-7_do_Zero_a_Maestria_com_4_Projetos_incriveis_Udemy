<?php

/*
 * Crie um array de 10 a 20 com o for; incremento de 1 em 1
 
 * Faça um loop em cima do array criado dinâmicamente 
 
 * imprima apenas os números ímpares
  
*/

$arr = [];

for($i = 0 ; $i < 10; $i++){
    array_push($arr, $i + 10);
}