<?php

$array = array('a1', 'a2', 'a3', 'a4');
$arr2 = ['cec', 'echibc', 'ojnb'];
$personas = array('nombre' => 'cec', 'apellidos' => 'cercvre', 'kyunr' => 'ryryturu');

echo "<ul>";

for ($i = 0; $i < count($array); $i++) {
    echo "<li>" . $array[$i] . "</li>";
}

echo "</ul>";

echo "<ul>";
//array asociativo
foreach ($personas as $valor => $per) {
    echo "<li>" . $valor . "</li>";
    echo "<li>" . $per . "</li>";
}

echo "</ul>";

//matrices array multidimencional
$contactos = array(
    array(
        'nombre' => 'Juan',
        'apellidos' => 'xjwn',
        'email' => 'jcbeiucbie'
    ),
    array(
        'nombre' => 'Luis',
        'apellidos' => 'rtbrt',
        'email' => 'jrutigir'
    ),
    array(
        'nombre' => 'Antonio',
        'apellidos' => '4tgrt',
        'email' => 'o.u.pi'
    ),
);

foreach ($contactos as $key => $contacto) {
    echo "Clave ==>".$key."<br>";
    echo "Valor ==>".$contacto['nombre']."<br>";
    echo "Valor ==>".$contacto['apellidos']."<br>";
    echo "Valor ==>".$contacto['email']."<br>";
}
