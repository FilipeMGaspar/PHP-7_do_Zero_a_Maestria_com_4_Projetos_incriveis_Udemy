<?php

/*
 * Crie um array de 10 a 20 com o for; incremento de 1 em 1
 
 * Faça um loop em cima do array criado dinâmicamente 
 
 * imprima apenas os números ímpares
  
*/

$arr = [];

for($i = 0 ; $i < 10; $i++){ // Preenchimento do array 
    array_push($arr, $i + 10);
}

echo "<br> Números Ímpares <br>";

$tamArray = count($arr);

for($i = 0; $i < $tamArray; $i++){
    if($arr[$i] % 2 != 0){
        echo $arr[$i] . " - ";
    }
}
echo " FIM! <br><br>";