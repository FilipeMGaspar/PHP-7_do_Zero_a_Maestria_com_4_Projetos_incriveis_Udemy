<?php

require_once "globals.php";
require_once "db.php";
require_once "models/User.php";
require_once "dao/UserDAO.php";
require_once "models/Message.php";


$message = new Message($BASE_URL); // Instanciamento do sistema de mensagem passando a base url