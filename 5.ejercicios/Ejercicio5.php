<?php

$juegos = array(
    array(
        'ACCION' => 'GTA',
        'AVENTURA' => 'ASSASAINS',
        'DEPORTES' => 'FIFA19'
    ),
    array(
        'ACCION' => 'COD',
        'AVENTURA' => 'CRASH',
        'DEPORTES' => 'PES19'
    ),
    array(
        'ACCION' => 'PUGB',
        'AVENTURA' => 'PRINCE OF PERSIA',
        'DEPORTES' => 'MOTO GP19'
    ),
);

echo "<table border=1>";

echo "<tr><th>ACCION</th><th>AVENTURA</th><th>DEPORTES</th></tr>";
for ($i = 0; $i < count($juegos); $i++) {
    echo "<tr><td>" . $juegos[$i]['ACCION'] . "</td>";
    require 'Ej5.1.php';
    require 'Ej5.2.php';
}

echo "</table>";
?>