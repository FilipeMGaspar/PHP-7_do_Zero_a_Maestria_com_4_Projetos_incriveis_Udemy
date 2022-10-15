<?php

      require_once "models/Movie.php";
      require_once "models/Message.php";

      //Review DAO

      class MovieDAO implements MovieDAOInterface {

        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url) {
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }
      }