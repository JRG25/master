<?php

$num = 3;
$suma = 0;
for ($i = 0; $i <= $num; $i++) {
    $suma += pow($i, 3);
}

echo "Suma n: " . $suma;

