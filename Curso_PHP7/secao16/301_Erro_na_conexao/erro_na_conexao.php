<?php
    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno){
        echo "Erro na conexão! <br>";
        echo "Erro: " . mysqli_connect_error();
    }