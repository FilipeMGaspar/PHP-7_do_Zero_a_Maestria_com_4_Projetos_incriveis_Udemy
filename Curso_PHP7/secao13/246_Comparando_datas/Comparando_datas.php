<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2024, 10, 10);
    $dataB->setTime(01, 10, 10);

    $dataC->setDate(2024, 10, 10);
    $dataB->setTime(01, 10, 10);

    if($dataB > $dataA) {
        echo "A data B é maior que a data A";
    } 

    echo "<br><br>";

    if($dataA < $dataB) {
        echo "A data A é menor que a data B";
    } 

    echo "<br><br>";

    if($dataB == $dataC) {
        echo "A data B e C são iguais";
    } 

    echo "<br><br>";