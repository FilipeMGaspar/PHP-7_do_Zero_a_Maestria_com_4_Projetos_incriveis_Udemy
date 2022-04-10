<?php
    // parse_url

    $url = "https://www.google.com";
    $arrayUrl = parse_url($url);
    print_r($arrayUrl);
    echo "<br><br>";

    echo $arrayUrl["host"] . "<br><br>";

    $url = "http://www.horadecodar.com.pt/?busca=php";
    $arrayUrl = parse_url($url);
    print_r($arrayUrl);
    echo "<br><br>";
    echo $arrayUrl["host"] . "<br><br>";
    echo $arrayUrl["query"] . "<br><br>";

    $url = "http://www.horadecodar.com.pt/usuarios/filipegaspar?id=12&nome=filipe";
    $arrayUrl = parse_url($url);
    print_r($arrayUrl);
    echo "<br><br>";