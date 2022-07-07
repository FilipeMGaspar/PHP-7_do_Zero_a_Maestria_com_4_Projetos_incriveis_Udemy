<?php

use CarDAO as GlobalCarDAO;

    require_once "models/Car.php";

    class CarDAO implements CarDAO {

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }
        
        public function findAll() {
            
        }

        public function create(Car $car)
        {
            $query = "INSERT INTO car (brand, KM, color) VALUES (:brand, :km, :color)";
            
            $stmt = $this->conn->prepare($query);
            
            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());
        }

    }