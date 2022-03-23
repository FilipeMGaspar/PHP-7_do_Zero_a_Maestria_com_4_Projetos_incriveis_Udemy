<?php
echo 5 / 2;
echo "<br>";

if(is_float(5/2)){
    echo "É um float!";
}


echo "<br><br>";

echo 2 . 3;

echo "<br>";

if (is_string(2 . 3)){
    echo "É uma String!";
}

$nome = "Lucas";
$sobrenome = "Fernandes";

$nomeCompleto = $nome . " " . $sobrenome;

echo "<br><br>";

echo $nomeCompleto;