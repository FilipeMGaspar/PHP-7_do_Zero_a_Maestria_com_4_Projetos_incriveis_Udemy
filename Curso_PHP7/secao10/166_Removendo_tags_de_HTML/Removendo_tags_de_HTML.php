<?php
    /**
     *      strip_tags  - Remove as tags html de uma string
     */

     $textoHtml = "<p>Testando paragrafo.</p><div> Uma div</div><p>outro paragrafo</p>";

    echo $textoHtml . "<br>";

    $textoslavoNoBanco = strip_tags($textoHtml);

    echo $textoslavoNoBanco . "<br>";