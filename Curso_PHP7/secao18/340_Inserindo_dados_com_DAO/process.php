<?php
    require_once "config.php";
    require_once "dao/CarDAO.php";

    $car = new CarDAO($conn);

    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($color);