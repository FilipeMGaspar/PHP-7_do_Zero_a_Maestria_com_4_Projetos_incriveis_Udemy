<?php
    //array_chunk

    $arr = range(1, 20);

    print_r(array_chunk($arr, 4)); // divide o array principal em arrays com 4 elementos cada
    echo "<br><br>";

    $arrays = array_chunk($arr, 10); // divide o array principal em arrays com 10 elementos cada
    print_r($arrays);
    echo "<br><br>";