<?php

    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");

    echo $dezDias . "<br>";

    $datAtualMais5 = date('d/m/Y', $cincoDias);
    echo $datAtualMais5 . "<br>";