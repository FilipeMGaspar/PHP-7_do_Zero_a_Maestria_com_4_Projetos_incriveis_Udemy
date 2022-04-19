<?php
    /**
     *  Crie um array multidimensional com 3 arrays que tem 4 elementos cada
     *  Imprima todos os elementos de cada um dos array
     *  Imprima também quando está mudando de array
     */

    $arr = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    for($i = 0; $i < count($arr); $i++){
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j] . " - ";
        }
        if($i + 1 < 3){
            echo " Fim do " . ($i + 1) . " array <br> Mudou de array <br>";
        }
        
    }
    
    /*echo "Primeiro array ..: " . $arr[0][1] . "<br>"; // primeiro array, segundo elemento
    echo "Segundo array ..: " . $arr[1][2] . "<br>"; // Segundo array, terceiro elemento
    echo "Terceiro array ..: " . $arr[2][3] . "<br>"; // terceiro array, ultimo elemento
    */