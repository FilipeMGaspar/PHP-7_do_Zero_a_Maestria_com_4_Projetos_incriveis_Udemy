<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2024, 10, 10);

    if($dataB > $dataA) {
        echo "A data B é maior que a data A";
    } 