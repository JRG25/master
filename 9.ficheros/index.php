<?php
    $archivo = fopen("ficheros.txt", "a+");

    //leer el contenido
    while (!feof($archivo)) {
        $contenido =fgets($archivo);
        echo $contenido."<br>";
    }

    //escribir archivos
    fwrite($archivo," ******archivo nuevo**********");

    //cerrar archivo:
    fclose($archivo);
?>