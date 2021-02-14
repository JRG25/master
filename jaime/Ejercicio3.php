<?php

$montoVenta = 1611 ;
$sueldoBasico = 560;
        
if ($montoVenta > 2200) {
    $bonificacion = $sueldoBasico*0.10;
}
else if ($montoVenta > 1500) {
    $bonificacion = $sueldoBasico*0.08;
}
else if ($montoVenta >1000) {
    $bonificacion = $sueldoBasico*0.05;
}
else if ($montoVenta >500) {
    $bonificacion = $sueldoBasico*0.03;
}

$sueldoNeto = $sueldoBasico + $bonificacion;

echo "El sueldo neto es: ".$sueldoNeto;


