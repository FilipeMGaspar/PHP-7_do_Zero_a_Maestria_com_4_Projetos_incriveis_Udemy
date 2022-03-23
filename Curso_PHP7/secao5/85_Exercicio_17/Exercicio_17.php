<?php
/*
Verifique as seguintes operações com AND

15 > 5 AND "João" === "João"

"teste" > 5 AND 1

2 == 3 AND 5 >= 3

*/

$a = 15;
$b = 5;

$nome = "joao";

if($a > $b && $nome === "joao"){
    echo "<br> $a > $b && $nome === joao <br><br>";
}

if("teste" > 5 && 1){
    echo "<br> teste > 5 && 1 <br><br>";
}

if(2 == 3 && 5 >= 3){
    echo "<br> 2 == 3 && 5 >= 3 <br><br>";
}

if(2 <= 3 && 10 > 5){
    echo "<br> 2 <= 3 && 10 > 5 <br><br>";
}