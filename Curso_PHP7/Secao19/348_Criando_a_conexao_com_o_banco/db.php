<?php

    $host = "localhost";
    $dbname = "moviestar";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dabname=$dbname", $user, $pass);

    // Habilitar erros PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);