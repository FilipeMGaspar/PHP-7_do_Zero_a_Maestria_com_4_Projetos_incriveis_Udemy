<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $sqlQuery = "";

    $conn->close(); // Fecha a ligação á base de dados