<?php
    $arr = [
        [1, 2, 3],
        [4, 5, 6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . "<br>"; // Acessando o primeiro arryy, e segundo elemento
    
    echo $arr[1][2] . "<br>"; // Acessando o segundo array, e ultimo elemento
    
    echo "<br>";
    echo count($arr) . "<br><br>";
    echo count($arr[0]) . "<br>";