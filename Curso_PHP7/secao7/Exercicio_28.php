<?php

/*
Crie um loop que vai até o número 30;
O contador deve iniciar com 4
Faça incrementos de 2 em 2 no contador
Utilize o break para para o loop quando chegar ao número 24
*/

$conta = 4;

while ($conta <= 30){
    

    if($conta === 24){
        echo "<br><br>";
    }
    $conta += 2;
}