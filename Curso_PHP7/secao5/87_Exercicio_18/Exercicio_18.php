<?php

/*
Verifique as seguintes operações com OR

12 < 5 OR  "joão" === "joão"

1 > 5  OR  1

20 === "20" AND 51 >= 31 
*/

$a = 12;
$b = 5;

$nome = "joao";

if($a < $b || "joao" === $nome){ //false   ou true  = true
    echo "<br> $a < $b || 'joao' === $nome <br><br>";
}

if(1 > 5 || 1){ // false  ou true = true
    echo "<br> 1 > 5 || 1 <br><br>";
}

if(20 === "20" && 51 >= 31){ //false  E  false  =   false 
    echo "<br> 20 === '20' && 51 >= 31 <br><br>";
}