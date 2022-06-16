<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "dGVzdGUxMjM=";
    $db = "cursophp";

    $conn = new mysqli($host, $user, base64_decode($pass), $db);