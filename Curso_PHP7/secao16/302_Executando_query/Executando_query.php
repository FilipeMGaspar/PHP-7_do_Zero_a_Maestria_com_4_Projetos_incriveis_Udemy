<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $query = "SELECT * From itens";

    $conn->query($query);
    
    $conn->close();