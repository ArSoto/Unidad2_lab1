<html>
<head>
</head>
<body>

<h1>Ejercicio 4</h1>
<h2>Tabla de 4 columnas con todas las imágenes de el directorio ”fotos”.</h2>

<?php
if ($gestor = opendir('fotos')){

   echo "<table>";
   echo "<tr>";
   $inicio=0;
   while (false !== ($archivo = readdir($gestor)))
   {
      if ($archivo!="." && $archivo!="..")
      {
             if ($inicio==4)
         {
                $i=0;
                    echo "</tr>";
                    echo "<tr>";
             }
         $i++;
             echo "<td>";
             echo "<a href=fotos/$archivo><img src=fotos/$archivo> </a>";
             echo "</td>";
          }
   }
   echo "</tr>";
   echo "</table>";
   closedir($gestor);
}
?>
</body>
</html>