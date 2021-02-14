<?php

$arr2 = ['revervvbr', 'tyhnty', 'uyjntu','Alfredo'];

//asort es en orden de primero a ultimo
asort($arr2);
var_dump($arr2);
//arsort es en orden del ultimo al primero
arsort($arr2);
var_dump($arr2);

//añadir elementos a un array con push
array_push($arr2, "coien");

//eliminar elementos con pop

array_pop($arr2); //para el ultimo elemento
unset($arr2[2]);

//aleatorio
$indice = array_rand($arr2);
echo $arr2[$indice];

//la reversa de un array
var_dump(array_reverse($arr2));

//busqueda dentro de un array
$resultado = array_search("Alfredo", $arr2);
var_dump($resultado);

