<?php
    /*
    *   \n    nova linha
    *   \t    tabulação
    *   \\    barra invertida
    *   \$    sinal de dólar
    *
    */

    // pular linha

    header("Content-type: text/plain"); // texto puro

    echo "Isso aqui vai ficar na primeira linha \nE isso na segunda linha \n";

    //tabulação
    echo "\nTestando a tabulação \taqui\n";

    // Barra invertida
    echo "Barra invertida \\";

    // sinal de dólar
    echo "imprimindo o dólar \$"; 