<?php

$temperaturaCelcius = 60;
$tempFar;
$tempKelvin;
$tempRankin;

//proceso
$tempFar = ($temperaturaCelcius * 1.8) + 32;
echo "Celsius: " . $temperaturaCelcius . " a FARENHEIT: " . $tempFar . " °F";
echo "<br>";
$tempKelvin = $temperaturaCelcius + 273.15;
echo "Celsius: " . $temperaturaCelcius . " a Kelvin: " . $tempKelvin . " °K";
echo "<br>";

$tempRankin = ($temperaturaCelcius * 1.8) + 491.67;
echo "Celsius: " . $temperaturaCelcius . " a Rankine: " . $tempRankin . " °R";


