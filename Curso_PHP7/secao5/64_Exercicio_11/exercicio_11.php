<?php
/*
Crie um arquivo PHP
Teste a expressão "5" * 12
Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação
*/ 

$expressao = "5" * 12;

echo $expressao . "<br>";

echo gettype($expressao);

echo "<br><br>";

echo gettype([]);

echo "<br><br>";

echo gettype(12.2);

echo "<br><br>";

echo gettype("Teste");

echo "<br><br>";