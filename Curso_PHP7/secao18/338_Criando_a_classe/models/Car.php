<?php
    class Car {

        private $id;
        private $brand;
        private $km;
        private $color;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getBrand() {
            return $this->brand;
        }
        private function setBrand($brand){
            $this->brand = $brand;
        }

        public function getKm () {
            return $this->km;
        }
        private function setKm($km){
            $this->km=$km;
        }

        public function getColor(){
            return $this->color;
        }
        private function setColor($color){
            $this->color = $color;
        }

        //Construtores
        public function __construct($brand, $km, $color) {
            $this->setBrand($brand);
            $this->setKm($km);
            $this->setColor($color);
        }
    }