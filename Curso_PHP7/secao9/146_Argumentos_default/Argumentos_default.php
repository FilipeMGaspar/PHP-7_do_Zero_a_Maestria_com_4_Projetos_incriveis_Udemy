<?php

    function teste($a = "Teste"){
        echo "<br> O valor de A é: $a <br>";
    }

    teste();

    teste(12.256);

    function testando($b, $a = "X"){
            echo "<br>O valor de A é: $a <br>";
            echo "O valor de B é $b <br>";
    }

    testando("1");