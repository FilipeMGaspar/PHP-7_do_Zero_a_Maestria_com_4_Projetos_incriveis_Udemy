<?php

    $cincoDias = strtotime("5 days");
    echo $cincoDias . "<br>";
    $datAtualMais5 = date('d/m/Y', $cincoDias);
    echo $datAtualMais5 . "<br><br>";

    $dezDias = strtotime("10 days");
    echo $dezDias . "<br>";
    $datAtualMais10 = date('d/m/Y', $dezDias);
    echo $datAtualMais10 . "<br><br>";

    $doisMeses = strtotime("2 months");
    echo $doisMeses . "<br>";
    $dataAtualMais2Meses = date('d/m/Y', $doisMeses);
    echo $dataAtualMais2Meses . "<br><br>";

    $dozeAnos = strtotime("12 years") ;
    echo $dozeAnos . "<br>";
    echo date('d/m/Y', $dozeAnos) . "<br><br>";