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

    //Data atual mais 2 meses
    echo "<br>Data atual mais 2 meses ..: <br>";
    $data->modify('+2 months');
    echo $data->format('l d, F - Y') . "<br>";

    //Data atual menos 3 anos
    echo "<br>Data atual menos 3 anos ..: <br>";
    $data->modify('-3 year');
    echo $data->format('l d, F - Y') . "<br>";