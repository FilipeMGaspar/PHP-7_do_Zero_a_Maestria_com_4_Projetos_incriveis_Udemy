<?php

    function velocidadeMaxima($vel){
        if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel Km/h <br>";
        } else {
            echo "Velocidade máxima do carro não foi definida!";
        }
      
    }

    velocidadeMaxima(220);
    velocidadeMaxima(180);
    velocidadeMaxima(320);
    //velocidadeMaxima(); 

    $velocidade = 125;

   velocidadeMaxima($velocidade);

   $velocidade = 256;
   velocidadeMaxima($velocidade, "Teste");
   velocidadeMaxima("teste");