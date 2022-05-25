<?php
    $data = new DateTime();

    print_r($data);
    echo "<br><br>";

    $data->setDate(1985, 01, 20);  // Ano, Mes, Dia
    print_r($data);
    echo "<br><br>";