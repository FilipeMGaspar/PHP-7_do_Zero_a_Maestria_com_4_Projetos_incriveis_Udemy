<?php

    /*
      *  Crie um array com número de 1 a 20;
      *  Crie um loop for para este array
      *  Imprima apenas os pares
    */ 

    $arr = [];
    
    for($i = 0; $i < 20; $i++){ //ciclo for para preencher o array
        $arr[$i] = $i + 1;
    }

    $tamArr = count($arr);
    echo "<br><br>Números PAR <br><br>";
    for($i = 0; $i <  $tamArr; $i++){ //ciclo para imprimir apenas os pares
        if($arr[$i] % 2 == 0){
            echo $arr[$i] . " - ";
        }
    }
    echo "FIM!";