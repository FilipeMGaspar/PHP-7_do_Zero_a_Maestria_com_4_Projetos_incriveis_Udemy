<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2024, 10, 10);

    if($dataB > $dataA) {
        echo "A data B é maior que a data A";
    } 

    echo "<br><br>";

    if($dataA < $dataB) {
        echo "A data A é menor que a data A";
    } 

    if($dataA == $dataC) {
        echo "A data A é igual á data C";
    } 