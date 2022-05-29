<?php
    print_r($_SERVER);

    echo "<br><hr><br>";
    echo $_SERVER['MYSQL_HOME'] . "<br><br>";

    if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1' ){
        echo "Está conectado no " . $_SERVER['SERVER_NAME'] . "<br><br>"; 
    }   