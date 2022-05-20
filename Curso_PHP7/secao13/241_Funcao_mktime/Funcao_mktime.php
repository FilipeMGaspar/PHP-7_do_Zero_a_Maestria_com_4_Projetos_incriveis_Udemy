<?php
    $dataNascimento = mktime(02, 12, 33, 01, 20, 1985);

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);