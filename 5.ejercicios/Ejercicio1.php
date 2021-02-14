<?php

$num = [1, 5, 8, 6, 2, 7, 25, 58];

echo "<ul>";

for ($i = 0; $i < count($num); $i++) {

    echo "<li>" . $num[$i] . "</li>";
}

echo "</ul>";

asort($num);
var_dump($num);

$cant =count($num);
echo $cant;
echo "<br>";

$res = array_search(6, $num);
echo $res;