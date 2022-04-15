<?php
    $arr = [];

    print_r($arr);
    echo "<br>";

    //Adicionar valores ao array 
    $arr[0] = 10;
    print_r($arr);
    echo "<br>";

    $arr[1] = 15;
    print_r($arr);
    echo "<br>";

    $arr[5] = 25;
    print_r($arr);
    echo "<br>";

    //Modificar valores no array    
    $arr[1] += 55;
    print_r($arr);
    echo "<br>";

    //Array associativo
    $arrAssoc = [];
    print_r($arrAssoc);

    //Adicionar valores ao array associativo
    $arrAssoc["carro"] = "BMW";
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["aviao"] = "Boeing";
    print_r($arrAssoc);
    echo "<br>";

    //Modificar valores no array associativo
    $arrAssoc["carro"] = "Ferrari";
    print_r($arrAssoc);
    echo "<br>";