<html>
<head>

    <meta charset= "utf-8" /> <!--permite caracteres acentuados -->
    <title>Pregunta 3</title>   <!--titulo de la pestaña -->
    <link rel="stylesheet" href="../css/estilo.css"> 

</head>

<body>
    <center>

        <h1>Ejercicio 4</h1>
        <h2>Tabla de 4 columnas con todas las imágenes de el directorio ”fotos”.</h2>

        <!-- Inicia codigo PHP-->
        <?php
            /*Directorio de las fotografias*/
            $dir = "fotos/";
            /*contador para el ciclo*/
            $contador = 0;

            /*verifica la existencia del directorio*/
            if (is_dir($dir)){

                /* abre el directorio lo asigna a la variable */
                if($gestor = opendir($dir)) {

                    /*Inicia la tabla*/
                    echo "<table>";
                    echo "<tr>";

                    /* el ciclo lee las rutas de cada archivo (foto)*/
                    while(($foto = readdir($gestor)) != false){

                        /*El archivo no debe ser de nombre ".." ni "." porque en realidad no son archivos*/
                        if($foto != ".." && $foto != "."){

                            /* si la fila ya alcanzo 4 columnas se crea otra fila y se reinicia el contador*/
                            if ($contador == 4){

                                echo "</tr>";
                                echo "<tr>";
                                $contador = 0;
                            }
                            /*se suma 1 al contador*/

                            $contador++;

                            /*Imprime el codigo con la ruta de la imagen*/
                            echo "<td> <img src=fotos/$foto> </td>";


                        }

                        
                    }

                /*cierra el directorio*/
                closedir($gestor);

                }
            /*cierra la tabla*/
            echo "</tr>";
            }

        ?>

      <br>
      <hr>
      <a href="../">Volver a atrás</a>
    </center>
</body>
</html>