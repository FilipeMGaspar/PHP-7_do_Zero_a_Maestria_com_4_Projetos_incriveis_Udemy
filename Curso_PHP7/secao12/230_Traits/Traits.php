<?php

    class Objeto{

        public function teste() {
            echo "Testando trait de objeto <br>";
        }
    }

    class Central {
        use Objeto;
    }

    $x = new Central;
    