<?php

/*
    * Crie um array de 1 a 10
    * Utilize um loop para criar este array
    
    ** Dica: você pode utilizar o método array_push(arr, elemento) para inserir um elemento num array

    * Imprima o array com o print_r
*/

$arr = [];

for($i = 0; $i < 10; $i++){
    array_push($arr, $i + 1);
}

print_r($arr);