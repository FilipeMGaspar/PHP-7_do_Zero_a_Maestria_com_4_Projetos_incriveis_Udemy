<?php
/**
 * converta os seguintes dados para int com o operador de cast
 * 
 *  "testando"
 * 
 *  12.9
 * 
 *  true
 * 
 *  [1, 2, 3]
 * 
 * Veja os resultados
 * 
 */

$a = (int) "testando";

$b = (int) 12.9;

$c = (int) true;

$d = (int) [1, 2, 3];

echo $a;

echo "<br><br>";

echo $b;

echo "<br><br>";

echo $c;

echo "<br><br>";

echo $d;