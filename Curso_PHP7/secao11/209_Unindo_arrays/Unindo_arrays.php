<?php
    // array_merge

    $arr =  [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.3, 44.5, 43.3];
    $arr4 = ["abc", "pty", "zxy"];

    $arrMerge = array_merge($arr, $arr2, $arr3, $arr4, [78, "joão"]);

    print_r($arrMerge);
    echo "<br>";