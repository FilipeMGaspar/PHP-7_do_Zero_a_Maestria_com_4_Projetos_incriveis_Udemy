<?php

    /*
      *  Crie um array com número de 1 a 20;
      *  Crie um loop for para este array
      *  Imprima apenas os pares
    */ 

    $arr = [];

    for($i = 0; $i < 20; $i++){
        $arr[$i] = $i + 1;
    }

    echo "<br>";
    print_r($arr);
    echo "<br>";