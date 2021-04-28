<?php

$conexion = mysqli_connect("localhost", "root", "", "phpmysql");
//com´robar si la con es correcta
if (mysqli_connect_errno()) {
    echo "la conexion a la BD es incorrecta". mysqli_connect_error();
}else{
    echo "conexion exitosa";
}

//consulta para configurar la codificacion de caracteres:
mysqli_query($conexion, "set names 'utf-8'");

$query = mysqli_query($conexion, "select * from notas");

while ($nota =mysqli_fetch_assoc($query)){
    var_dump($nota);
}

echo "<hr>";

//insertar datos en bd:
$sql ="insert into notas values (null,'Nota desde php','esto es una nota de php','green')";
$insert = mysqli_query($conexion, $sql);

if ($insert) {
    echo "datos insertados";
}else{
    echo "Error: ". mysqli_error($conexion);
}