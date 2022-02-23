<?php

$a = 12;
$b = 5;

$nome = "joao";

if($a < $b || "joao" === $nome){ //false   ou true  = true
    echo "<br> $a < $b || 'joao' === $nome <br><br>";
}

if(1 > 5 || 1){ // false  ou true = true
    echo "<br> 1 > 5 || 1 <br><br>";
}

if(20 === "20" && 51 >= 31){
    echo "<br> 20 === '20' && 51 >= 31 <br><br>";
}