<?php

/*
Crie um array com valores inteiros de 10 a 100, com incremento de 10;
Aplique um loop neste array
Quando entrar os valores 30 ou 40, pule para a próxima execução
*/ 

$arr =[10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = count($arr); 
$conta = 0;

while($conta < $i){

    if($arr[$conta] == 30 || $arr[$conta] == 40){
        $conta ++;
        echo " X ";
        continue;
    }

    echo "$arr[$conta] - ";
    $conta++;
}

echo " FIM! <br><br>";