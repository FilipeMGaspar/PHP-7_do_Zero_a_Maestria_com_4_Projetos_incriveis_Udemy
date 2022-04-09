<?php
    /**
     *  Converta a seguinte string para array:
     *  
     *  carro - navio - helicóptero - barco - jangada
     */

     $str = "carro - navio - helicóptero - barco - jangada";
     $strArray = explode(" - ", $str);

     echo $str . "<br><br>";

     //print_r($strArray);
     echo "<h3>Produtos:</h3>";
     echo "<ul>";   
     foreach ($strArray as $palavra){
        echo "<li>$palavra</li>";
     }
     echo "</ul>";