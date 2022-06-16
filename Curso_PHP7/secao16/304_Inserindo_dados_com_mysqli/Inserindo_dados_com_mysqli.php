<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $passencode = base64_encode($pass);
    
    echo $passencode . "<br>";