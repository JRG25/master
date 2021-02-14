<?php

$numero = 42;
$cont = 0;
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $cont++;
    }
}


if ($cont != 2) {
    echo "no es primo";
} else {
    echo "es primo";
}

