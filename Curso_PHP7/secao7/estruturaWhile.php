<?php
$c = 1;

echo "<br><br>";
while($c < 10){
    echo $c;
    echo " - ";
    $c++;
}
echo "FIM! <br><br>";

$y = 0;

while($y <= 10){
    echo $y;
    echo " - ";
    $y += 2;
}
echo "FIM! <br><br>";

$a = 10;

while($a > 0){

    if($a % 2 != 0){ //imprime apenas números impares
        echo $a;
        echo " - ";
    }
    $a--;
}
echo "FIM! <br><br>";