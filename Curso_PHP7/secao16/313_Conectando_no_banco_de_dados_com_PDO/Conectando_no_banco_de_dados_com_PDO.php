<?php
$host = "localhost";
$db = "cursophp"
$user = "root";
$pass = "";


//$conn = new PDO("mysql:host=localhost;dbname=cursophp", $user, $pass);

$conn = new PDO("mysql:host=$host;dbname=$db"); // ligação á base de dados com PDO