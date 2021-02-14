<?php
$tablas = array(
    "ACCION" => array("GTA5", "CALL OF DUTY", "PUGB"),
    "AVENTURA" => array("ASSASAINS", "CRASH", "PRINCE OF PERSIA"),
    "DEPORTES" => array("FIFA19", "PES19", "MOTOG19"),
);
$categorias = array_keys($tablas);
?>
<table border = "1">

    <?php require_once './include/encabezado.php'; ?>
    <?php require_once './include/primera.php'; ?>
    <?php require_once './include/segunda.php'; ?>
    <?php require_once './include/tercera.php'; ?>

</table>



