<?php
    $data = new DateTime();

    //Data Atual
    echo "Data atual: <br>";
    echo $data->format('d/m/Y') . "<br>";
    echo $data->format('D - M - Y') . "<br>";
    echo $data->format('l d, F - Y') . "<br>";

    //Data atual mais 5 dias
    echo "<br>Data atual mais 5 dias ..: <br>";
    $data->modify('+5 days');
    echo $data->format('l d, F - Y') . "<br>";

    echo "<br>Data atual mais 2 meses ..: <br>";
    $data->modify('+5 months');
    echo $data->format('l d, F - Y') . "<br>";