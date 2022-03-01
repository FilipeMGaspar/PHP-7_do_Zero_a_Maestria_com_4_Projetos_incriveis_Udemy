<?php

$num = 256;

$txt = "Texto";

$check = true;

if(is_int($num)){
    echo "O número $num, <strong>É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
} else {
    echo "O número $num, <strong>NÃO É</strong> um número <strong>INTEIRO!</strong>";
    echo "<br><br>";
}