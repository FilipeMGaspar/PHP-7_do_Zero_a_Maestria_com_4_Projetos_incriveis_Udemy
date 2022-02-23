<?php

if(5 > 15 || "teste" == "teste"){ //false  ou  true  =  true
    echo "<br> 5 > 15 || 'teste' == 'teste' <br><br>";
}

if(5 > 2 || 3 < 4){ //true  ou  true  =  true
    echo "<br> 5 > 2 || 3 < 4 <br><br>";
}

if(5 > 20 || 3 < 4){ //false  ou  true  =  true
    echo "<br> 5 > 20 || 3 < 4 <br><br>";
}

if(6 > 59 || 35 < 15){ //false  ou  false =  false
    echo "<br> 6 > 59 || 35 < 15 <br><br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if($a > $b || $d < $c){ //false   ou   true   = true
    echo "<br> $a > $b || $d < $c <br><br>";
}

if(($a > $b || $d < $c) && $c < $d){ //true e true = true
    echo "<br> ($a > $b || $d < $c) && $c < $d <br><br>";
}