<?php

    // sort     coloca por ordem crescente

    // rsort     coloca por ordem decrescente    

    $arr = [5, 6, 9, 3, 356, 32, 123, 4, 12, 999, 1, 8];
    print_r($arr);
    echo "<br><br>";

    sort($arr);
    echo "Ordem crescente <br>";
    print_r($arr);
    echo "<br><br>";

    rsort($arr);
    echo "Ordem decrescente <br>";
    print_r($arr);
    echo "<br><br>";