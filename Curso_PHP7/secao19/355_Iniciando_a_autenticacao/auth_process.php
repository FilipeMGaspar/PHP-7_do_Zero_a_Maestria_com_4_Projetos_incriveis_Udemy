<?php
   // require_once "globals.php";
   // require_once "db.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";
   
    // Verifica o tipo do formulário ..: Register :.. ou ..: Login :..

    $type = filter_input(INPUT_POST, "type"); // Evita inserção de dados maliciosos pelo utilizador

    echo $type;