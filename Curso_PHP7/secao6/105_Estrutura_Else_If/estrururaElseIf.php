<?php

if(10 > 5){
    echo "Entrou no if <br><br>";
} else if(10 > 6){
    echo "Entrou no else if <br><br>";
}

if(10 < 5){
    echo "Entrou no if <br><br>";
} else if(10 > 6){
    echo "Entrou no else if <br><br>";
}

if(10 < 5){
    echo "Entrou no if <br><br>";
} else if(10 < 6){
    echo "Entrou no else if <br><br>";
}

if(10 < 5){
    echo "Entrou no if <br><br>";
} else if(10 < 6){
    echo "Entrou no else if <br><br>";
} else {
    echo "Entrou no else <br><br>";
}

if(10 < 5){
    echo "Entrou no if <br><br>";
} else if(10 < 6){
    echo "Entrou no else if <br><br>";
} else if(11 > 1) {
    echo "Entrou no else if 2 exec 4<br><br>";
}else {
    echo "Entrou no else <br><br>";
}

$a = 10;
$b = 5;
$msg = "Entrou no else if";

if($a < $b){
    echo "Entrou no if <br><br>";
} else if($a < $b){
    echo "Entrou no else if <br><br>";
} else if($a > $b) {
    echo "Entrou no else if 2 exec 5<br><br>";
}else {
    echo $msg . "<br><br>";
}