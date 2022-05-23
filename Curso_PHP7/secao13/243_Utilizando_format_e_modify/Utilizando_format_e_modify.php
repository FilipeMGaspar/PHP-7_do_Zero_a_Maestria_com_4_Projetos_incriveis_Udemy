<?php
    $data = new DateTime();

    echo $data->format('d/m/Y') . "<br>";

    echo $data->format('D - M - Y') . "<br>";

    echo $data->format('l d, F - Y') . "<br>";

    echo $data->modify('+5 days') . "<br>";