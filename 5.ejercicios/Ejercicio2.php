<?php
//variables
$numeros = array();

//´proceso
for ($index = 0; $index < 120; $index++) {
    array_push($numeros, $index);
}

//reporte
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i]."<br>";
}


