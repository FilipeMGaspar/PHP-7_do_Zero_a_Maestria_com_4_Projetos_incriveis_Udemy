<?php

    if(10 > 2){
        echo "Entrou no primeiro if <br><br>";

        if("teste" == "teste"){
            echo "Entrou no Segundo if <br><br>";
        }
    }

    if(10 > 2){
        echo "Entrou no primeiro if 2<br><br>";

        if("teste" != "teste"){
            echo "Entrou no Segundo if 2<br><br>";
        } else{
            echo "Entrou no Segundo else 2<br><br>";
        }
    }

    if(5 > 20){
        echo "Entrou no primeiro if 3<br><br>";

        if("teste" != "teste"){
            echo "Entrou no Segundo if 3<br><br>";
        } else{
            echo "Entrou no Segundo else 3<br><br>";
        }
    } else {
        echo "Entrou no primeiro else 3 <br><br>";
    }