<?php
    /**
     *  Crie um array com os seguintes valores :
     *              Jaguar, 3.0, azul, 18, Teto solar, automático
     * 
     *  Chame este array de carro
     *  
     *  Crie variáveis com base neste array
     */

     $carro = ["Jaguar", 3.0, "Azul", 18, "Teto de abrir", "Aucomática"];

    list($marca, $celindrada, $cor, $jantes, $teto, $caixa) = $carro;

    echo "<h3>Mal-Se-Move AutoMóveis! Calhambeques de qualidade</h3>";
    echo "Marca .........: $marca <br>";
    echo "Celindrada ..: $celindrada <br>";
    echo "Cor ..............: $cor <br>";
    echo "Jantes ...........: $jantes <br>";
    echo "Extras ..........: $teto <br>";
    echo "Caixa ...........: $caixa <br>";