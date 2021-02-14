<?php
//para mostrar el valor de las cookies se tiene q usar una var superglobal(array asociativo):
if (isset($_COOKIE['micookie'])) {
     echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "no existe cookie";
}

if (isset($_COOKIE['unyear'])) {
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "no existe cookie";
}

?>
<a href="crearCookie.php">crear cookies</a><br>
<a href="borrar_cookie.php">borrar cookies</a>
