<?php

use CarDAO as GlobalCarDAO;

    require_once "models/Car.php";

    class CarDAO implements CarDAOInterface {

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }
        
        public function findAll() {
            
            $cars = [];

            $query = "SELECT * FROM car";
            $stmt = $this->conn->prepare($query);

            $data = $stmt->fetchAll();

            foreach ($data as $carro) {
                $car = new Car();

                $car->setId($carro["id"]);
                $car->setBrand($carro["brand"]);
                $car->setKm($carro["KM"]);
                $car->setColor($carro["color"]);

                $car[] = $car;
            }
            
            return $cars;
        }

        public function create(Car $car)
        {
            $query = "INSERT INTO car (brand, KM, color) VALUES (:brand, :km, :color)";
            
            $stmt = $this->conn->prepare($query);
            
            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }

    }