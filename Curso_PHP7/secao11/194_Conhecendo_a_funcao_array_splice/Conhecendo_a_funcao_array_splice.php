<?php
    // array_splice  -> Resgatar Elementos de um Array 
                     // Remover Elementos

    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1 , 2);

    print_r($arr);
    echo