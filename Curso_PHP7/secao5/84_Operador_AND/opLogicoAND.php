<?php

if(5 > 10 && 10 > 5){ //false e true
    echo "Entrei no primeiro if '5 > 10 && 10 > 5' <br><br>";
}

if(5 < 10 && 10 > 5){ //true e true
    echo "Entrei no primeiro if '5 < 10 && 10 > 5' <br><br>";
}

if(5 < 10 && 10 > 50){ //true e false
    echo "Entrei no primeiro if '5 < 10 && 10 > 50' <br><br>";
}

if(500 < 10 && 10 > 50){ //false e false
    echo "Entrei no primeiro if '5 < 10 && 10 > 50' <br><br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > $b && $c == $d){
    echo "<br><br> If $a > $b && $c == $d <br><br>";
}

if($b > $a && $c >= $d){
    echo "<br><br> If $b > $a && $c >= $d <br><br>";
}