<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophpa";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno){
        echo "Erro na conexão";
    }