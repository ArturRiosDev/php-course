<?php

    $nombreArchivo="archivo.txt";

    $contenidoDelArchivo="Saludos ";

    $archivoAcrear= fopen($nombreArchivo,'w');

    fwrite($archivoAcrear,$contenidoDelArchivo);

    fclose($archivoAcrear);
?>