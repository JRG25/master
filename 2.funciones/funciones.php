<?php

echo "<hr>";

function tabla($numero) {
    echo "tabla del num: " . $numero . "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero * $i = " . $numero * $i . "<br>";
    }
}

/* if (isset($_GET['numero'])) {
  tabla($_GET['numero']);
  }else{
  echo "no hay numero para multiplicar";
  } */

/* for ($i=1; $i <=10 ; $i++) { 
  tabla($i);
  } */

function calculadora($num1, $num2) {
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    $cadena = "";
    $cadena .= "SUMA: " . $suma . "<br>";
    $cadena .= "RESTA: " . $resta . "<br>";
    $cadena .= "MULT: " . $mult . "<br>";
    $cadena .= "DIV: " . $div . "<br>";

    return $cadena;
}

//echo calculadora(10, 30);

function getNombre($nombre) {
    $texto = "el nombre es: " . $nombre;
    return $texto;
}

function getAp($apellido) {
    $texto = "el apellido es: " . $apellido;
    return $texto;
}

function Nombre($nombre, $apellidos) {
    $cad = getNombre("rcerex")
            . "<br>" .
            getAp("nvnbnvnv");
    return $cad;
}

//echo Nombre("erverve", "ononb");
//func variable
function buenosDias() {
    return "bcuecbueybc";
}

function buenasTrades() {
    return "envoev";
}

function buenasNochs() {
    return "vrvirv";
}

$horario = "Nochs";
$mifuncion = "buenas" . $horario;
echo $mifuncion();

