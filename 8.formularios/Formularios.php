<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myform" action="Formularios.php" method="POST">
            <label for="txtNombre">nombre: </label>
            <p><input type="text" name="txtNombre" value="" size="10" /></p>
            <label for="txtAp">apellidos: </label>
            <p><input type="text" name="txtAp" value="" size="10" /></p>
            <input type="submit" value="Enviar" name="btnEnv" />
            <label for="btnbot">boton: </label>
            <input type="submit" value="boton" name="btnbot" />
            <p><label for="sexo">sexo: </label></p>
            <p>
                Hombre<input type="checkbox" name="sexo" value="ON" checked="checked" />
                Mujer<input type="checkbox" name="sexo" value="ON"/>
            </p>
            <label for="color">color: </label>
            <p><input type="color" name="color"></p>
            <label for="fecha">fecha: </label>
            <p><input type="date" name="fecha"></p>

            <label for="correo">email:</label>
            <p><input type="email" name="correo"/></p>

            <label for="archivo">email:</label>
            <p><input type="file" name="archivo" multiple="multiple"/></p>

            <label for="numero">numero:</label>
            <p><input type="number" name="numero"/></p>

            <label for="contra">contraseña:</label>
            <p><input type="password" name="contra"/></p>

            <label for="conti">continente:</label>
            <p>

                America<input type="radio" name="conti" value="America"/>
                Europa<input type="radio" name="conti" value="Europa"/>
                Asia<input type="radio" name="conti" value="Asia"/>
            </p>

            <label for="web">Pagina web</label>
            <p><input type="url" name="web"/></p>
            
            <textarea></textarea><br>
            
            <select name="peliculas">
                <option value="spiderman">spiderman</option>
                <option value="batman">batman</option>
                <option value="gran torino">gran torino</option>
            </select>
            
        </form>
    </body>
</html>
