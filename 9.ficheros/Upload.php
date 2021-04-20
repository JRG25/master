<?php
     $archivo=$_FILES['archivo'];
     $nombre = $archivo['name'];
     $tipo = $archivo['type'];

     if ($tipo=="image/jpg" || $tipo=="image/png" || $tipo=="image/gif" || $tipo=="image/jpeg") {
         if (!is_dir('images')) {
             mkdir('images',0777);
         }

         move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
         header("Refresh:5; URL=subidas.php");
         echo "<h1>imagen subida correctamente</h1>";
     }else{
         header("Refresh:5; URL=subidas.php");
         echo "sube un formato correcto";
     }
?>