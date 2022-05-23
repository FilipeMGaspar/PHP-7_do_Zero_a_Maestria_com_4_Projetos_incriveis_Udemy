<?php
    $data = new DateTime();

    //Data Atual
    echo $data->format('d/m/Y') . "<br>";
    echo $data->format('D - M - Y') . "<br>";
    echo $data->format('l d, F - Y') . "<br>";

    //Data atual mais 5 dias
    $data->modify('+5 days');
    echo $data->format('l d, F - Y') . "<br>";