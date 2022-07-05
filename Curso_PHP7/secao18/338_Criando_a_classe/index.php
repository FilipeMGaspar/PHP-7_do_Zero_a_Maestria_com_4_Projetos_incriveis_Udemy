<?php
    require_once "db.php";
    require_once "models/Car.php";

    $bmw = new Car("BMW", 15023, "Azul");

    print_r($bmw);
?>