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

    echo $arr[0][1] . "<br>"; // primeiro array, segundo elemento
    echo $arr[1][2] . "<br>"; // Segundo array, terceiro elemento
    echo $arr[2][3] . "<br>"; // terceiro array, ultimo elemento