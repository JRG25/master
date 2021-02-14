<?php

$num = 0;
while ($num <= 100) {
    echo "$num";
    if ($num != 100) {
        echo ", ";
    }
    $num++;
}

echo "<hr>";

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>TABLA $numero</h1>";
$cont = 0;
while ($cont <= 10) {
    echo"$numero x $cont = " . ($numero * $cont) . "<br>";
    $cont++;
}

//for

echo "<hr>";

$r = 0;
for ($i = 0; $i <= 100; $i++) {
    $r += $i;
}

echo "<h1>$r</h1>" . "<br>";


