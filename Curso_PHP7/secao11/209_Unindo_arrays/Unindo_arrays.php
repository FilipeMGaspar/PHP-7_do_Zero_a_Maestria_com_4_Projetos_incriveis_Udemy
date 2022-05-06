<?php
    // array_merge

    $arr =  [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.3, 44.5, 43.3];
    $arr4 = ["Maria", "joão", "Nita"]

    $arrMerge = array_merge($arr, $arr2, $arr3, $arr4);

    print_r($arrMerge);
    echo "<br>";