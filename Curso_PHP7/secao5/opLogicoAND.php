<?php

if(5 > 10 && 10 > 5){ //false e true
    echo "Entrei no primeiro if '5 > 10 && 10 > 5'";
}

if(5 < 10 && 10 > 5){ //true e true
    echo "Entrei no primeiro if '5 < 10 && 10 > 5' <br><br>";
}

if(5 < 10 && 10 > 50){ //true e false
    echo "Entrei no primeiro if '5 < 10 && 10 > 50' <br><br>";
}