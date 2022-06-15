<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $sqlQuery = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

    $conn->close(); // Fecha a ligação á base de dados