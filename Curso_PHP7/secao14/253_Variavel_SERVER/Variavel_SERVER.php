<?php
    print_r($_SERVER);

    echo "<br><hr><br>";
    echo $_SERVER['MYSQL_HOME'] . "<br><br>";

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        echo "Está conectado no " . $_SERVER['SERVER_Name'] . "<br><br>"; 
    }   