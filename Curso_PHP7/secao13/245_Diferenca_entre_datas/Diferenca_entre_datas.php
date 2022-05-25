<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2001, 10, 15); // Ano, Mês, Dia

    print_r($dataA);
    echo "<br><br>";
    print_r($dataB);
    echo "<br><br>";

    $diferenca = $dataA->diff($dataB);
    print_r($diferenca);
    echo "<br><br>";