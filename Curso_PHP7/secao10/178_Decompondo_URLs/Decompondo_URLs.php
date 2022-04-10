<?php
    // parse_url

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "<br><br>";

    echo $arrayUrl["host"] . "<br><br>";

    $url = "http://www.horadecodar.com.pt";