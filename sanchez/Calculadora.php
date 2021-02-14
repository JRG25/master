<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Calculadora.php" method="POST">
            <?php
            if (isset($_POST['btnSuma']) || isset($_POST['btnResta']) || isset($_POST['btnProd']) || isset($_POST['btnDiv'])) {
                $num1 = $_POST['txtNum1'];
                $num2 = $_POST['txtNum2'];
                $r = $_POST['txtR'];
                if (!empty($num1) && !empty($num2)){
                if (isset($_POST['btnSuma']))
                    $r = $num1 + $num2;
                if (isset($_POST['btnResta']))
                    $r = $num1 - $num2;
                if (isset($_POST['btnProd']))
                    $r = $num1 * $num2;
                if (isset($_POST['btnDiv']))
                    $r = $num1 / $num2;
                }else{
                    echo '<script language="javascript">alert("Ingrese Datos")</script>';
                }
            }
            ?>
            <table border="1" align="center">
                <thead>
                    <tr>
                        <th colspan="2">Calculadora</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <label name="numero1"/>Numero1:</td>
                        <td><input type="text" name="txtNum1" value="<?php if (isset($num1)) echo $num1; ?>" size="10" /></td>
                    </tr>
                    <tr>
                        <td><label name="numero2"/>Numero2:</td>
                        <td><input type="text" name="txtNum2" value="<?php if (isset($num2)) echo $num2; ?>" size="10" /></td>
                    </tr>
                    <tr>
                        <td><label name="resultado"/>Resultado</td>
                        <td> <input type="text" name="txtR" value="<?php if (isset($r)) echo $r; ?>" size="10" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="+" name="btnSuma" />
                            <input type="submit" value="-" name="btnResta" />
                            <input type="submit" value="*" name="btnProd" />
                            <input type="submit" value="/" name="btnDiv" /> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
