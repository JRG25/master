<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>VENTAS FORMULARIO</title>
    </head>
    <body>
        <form action="Ventas.php" method="POST">
            <?php
            if (isset($_POST['btnCalcular'])) {
                $nombre = $_POST['txtNombre'];
                $prod = $_POST['txtProd'];
                $precio = $_POST['txtPrecio'];
                $cant = $_POST['txtCantidad'];
                $impCompra = $_POST['txtImporte'];
                $impDesc = $_POST['txtImporteDesc'];
                $impVenta = $_POST['txtImporteVenta'];
                if (empty($nombre) && empty($Prod) && empty($precio) && empty($cant)) {
                    echo '<script language="javascript">alert("Ingrese los datos Por Favor!")</script>';
                } else {
                    if (isset($_POST['btnCalcular'])) {
                        $impCompra = $precio * $cant;
                        $impDesc = 0;
                        if ($cant >= 6) {
                            $impDesc = 0.05 * $impCompra;
                        }
                        $impVenta = $impCompra - $impDesc;
                    }
                }
            }
            ?>

            <table border="1" align="center">
                <thead>
                    <tr>
                        <th colspan="2">FORMULARIO DE VENTAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label name="nombre"/>CLIENTE:</td>
                        <td><input type="text" name="txtNombre" value="<?php if (isset($nombre)) echo $nombre; ?>" size="20"/></td>
                    </tr>
                    <tr>
                        <td><label name="nombreProd"/> PRODUCTO:</td>
                        <td><input type="text" name="txtProd" value="<?php if (isset($prod)) echo $prod; ?>" size="20"/></td>
                    </tr>
                    <tr>
                        <td><label name="precio"/>PRECIO:</td>
                        <td><input type="text" name="txtPrecio" value="<?php if (isset($precio)) echo $precio; ?>" size="20"/></td>
                    </tr>
                    <tr>
                        <td><label name="cantidad"/>CANTIDAD:</td>
                        <td><input type="text" name="txtCantidad" value="<?php if (isset($cant)) echo $cant; ?>" size="20"/></td>
                    </tr>
                    <tr>
                        <td><label name="impcompra"/>IMPORTE DE COMPRA:</td>
                        <td><input type="text" name="txtImporte" value="<?php if (isset($impCompra)) echo $impCompra; ?>" /></td>
                    </tr>
                    <tr>
                        <td><label name="impdesc"/>IMPORTE DE DESC:</td>
                        <td><input type="text" name="txtImporteDesc" value="<?php if (isset($impDesc)) echo $impDesc; ?>" /></td>
                    </tr>
                    <tr>
                        <td><label name="impventa"/>IMPORTE DE VENTA:</td>
                        <td><input type="text" name="txtImporteVenta" value="<?php if (isset($impVenta)) echo $impVenta; ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="1" align="center"><input type="submit" name="btnCalcular" value="Calcular"/></td>
                        <td colspan="1" align="center"><input type="reset" value="Limpiar" name="btnLimpiar" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>



