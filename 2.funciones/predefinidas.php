<?php

//fechas
echo date('d-m-Y') . "<br>";
echo time() . "<br>";

//matematica
echo "raiz: " . sqrt(10);
echo "num aleatorio: " . rand(10, 40);

echo "<br>";

echo pi();
echo "<br>";

echo round(7.891234, 2) . "<br>";

//funciones geneales
if (is_string($nombre)) {
    echo "es string";
}
echo "<br>";

//isset es saber si existe o no.
if (isset($edad)) {
    echo "existe";
} else {
    echo "no existe";
}

//trim quita espacios en blanco
//elimiar variables
$year = 2020;
unset($year);

//comprobar variable vacia
if (empty($texto)) {
    echo "esta vacia";
} else {
    echo "tiene contenido";
}

echo "<br>";
//contar caracteres de un str
$cadena = "efcve";
echo strlen($cadena);
echo "<br>";
//encontrar caracter
$frase = "ecefc";
echo strpos($frase, "f");
echo "<br>";
//remmplazar contenido
echo str_replace("f", "moto", $frase);
echo "<br>";
//mayuscula
echo strtolower($frase) . "<br>";
echo strtoupper($frase);

