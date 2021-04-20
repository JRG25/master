<?php

function validarEmail($email) {
    $error = "faltan valores o invalido";
    if (!empty($_POST['email']) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'ok';
    }

    if (isset($_POST['email'])) {
        echo validarEmail($_POST['email']);
    } else {
        echo "pasa un valor";
    }
}
?>


<form action="Ejercicio2.php" method="POST">
    <label for="email">Email:</label>
    <p>
        <input type="email" name="email"/>
    </p>
    <p>
        <input type="submit" name="enviar" value="enviar">
    </p>
</form>

