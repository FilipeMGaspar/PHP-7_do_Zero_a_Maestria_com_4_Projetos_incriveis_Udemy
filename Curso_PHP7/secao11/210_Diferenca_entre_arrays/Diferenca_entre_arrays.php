<?php
    // array_diff

    $arr = [1, 2, 3];
    $arr2 = [2, 4 , 6];

    $dif = array_diff($arr, $arr2); // Diferença do arr para o arr2
    print_r($dif);
    echo "<br><br>";

    $dif = array_diff($arr2, $arr); // Diferença do arr2 para o arr
    print_r($dif);
    echo "<br>";

    $arr3 = [4, 6];
    $dif = array_diff($arr2, $arr, $arr3); 
    print_r($dif);
    echo "<br>";