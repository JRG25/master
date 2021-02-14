<?php
session_start();
$_SESSION['nombre'] = "alejandro";
$_SESSION['edad'] = "49";
$_SESSION['email'] = "alejandro@outlook.com";

echo "<a href='Pagina2.php'> Ir a pagina 2</a>";
