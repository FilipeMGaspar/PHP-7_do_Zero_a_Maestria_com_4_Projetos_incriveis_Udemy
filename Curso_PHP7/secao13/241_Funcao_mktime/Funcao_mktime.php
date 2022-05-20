<?php
    $dataNascimento = mktime(02, 12, 33, 01, 20, 1985); // mktime(Hora, Minuto, Segundo, mês, dia, Ano)
    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
    echo $dataNascimentoFormatada . "<br>";

    $dataEspecifica = mktime(12, 30, 59, 02, 28, 2045);
    echo $dataEspecifica ."<br>";
    $dataEspecificaFormatada = data('d/m/Y', $dataEspecifica);
    echo $dataEspecificaFormatada . "<br>";
