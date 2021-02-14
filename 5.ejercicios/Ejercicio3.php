<?php

$texto ="";
if (empty($texto)) {
    echo "esta vacia<br>";
    $texto = "<b>hola como estas";
} else {
    echo "no esta vacia";
}

echo strtoupper($texto);

