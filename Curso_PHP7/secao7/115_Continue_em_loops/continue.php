<?php
   
   $x = 10;

    while($x > 0){
      
       if($x == 5 || $x == 7){
            echo "Pulou a execução <strong>contimue</strong> $x <br>";
            $x--;
            continue;
       }

       if($x == 2){
        echo "Terminou o loop <strong>break</strong> $x <br>"; 
        break;
       }

       echo "Executando o loop $x<br>";

       $x--;

    }