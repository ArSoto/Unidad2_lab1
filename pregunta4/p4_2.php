<html>
<head>

    <style>
        img{
                 width:300px;
                height:300px;
        }
    </style>
</head>
<body>

<h1>Ejercicio 4</h1>
<h2>Tabla de 4 columnas con todas las imágenes de el directorio ”fotos”.</h2>

<?php
    $dir = "fotos/";
    $contador = 0;

    if (is_dir($dir)){
        if($gestor = opendir($dir)) {

            echo "<table>";
            echo "<tr>";

            while(($foto = readdir($gestor)) != false){

                if($foto != ".." && $foto != "."){


                    if ($contador == 4){

                        echo "</tr>";
                        echo "<tr>";
                        $contador = 0;
                    }

                    $contador++;

                    echo "<td> <img src=fotos/$foto> </td>";


                }

                
            }


        closedir($gestor);

        }

    echo "</tr>";
    }

?>
</body>
</html>