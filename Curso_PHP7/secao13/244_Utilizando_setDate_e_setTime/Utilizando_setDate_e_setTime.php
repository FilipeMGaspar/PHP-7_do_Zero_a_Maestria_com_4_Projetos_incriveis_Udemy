<?php
    $data = new DateTime();

    print_r($data);
    echo "<br><br>";

    $data->setDate(1985, 01, 20);  // Ano, Mes, Dia
    print_r($data);
    echo "<br><br>";

    $data->setTime(05, 12, 10); // Horas, Minutos, Segundos
    print_r($data);
    echo "<br><br>";