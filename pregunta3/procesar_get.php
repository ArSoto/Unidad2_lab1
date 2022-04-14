<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>

    <meta charset= "utf-8" /> <!--permite caracteres acentuados -->
    <title>Pregunta 3</title>   <!--titulo de la pestaña -->
    <link rel="stylesheet" href="../css/estilo.css"> 

  </head>

  <body>
    <CENTER>

      <!-- Inicia codigo PHP-->
      <?php

          /* asigna a la variable $metodo el tipo de metodo utilizado  (post) para acceder a la página*/
        $metodo = $_SERVER["REQUEST_METHOD"];

        /*Obtiene el quiery de la URL */
        $cad_consulta = $_SERVER['QUERY_STRING'];
        
        /*Imprime titulo*/
        echo "<H2> Método $metodo</H2>";
        /*Imprime Query*/
        echo "<I>Query String</I>: $cad_consulta <HR>";

        /*Iniacialización de variables*/
        $inicio = 1;
        $TAM = $_GET["TAM"];    /*asigna el valor del tamaño de la tabla a través de la función $_get*/
        $N = $_GET["N"];    /*asigna el valor del largo de la fila a través de la función $_get*/
        $color_1 = $_GET["color1"];     /*asigna el color de la fila 1 de la tabla a través de la función $_get*/
        $color_2 = $_GET["color2"];     /*asigna el color de la fila 2 de la tabla a través de la función $_get*/

        $colorear = "$color_1";     /* almacena el color a utilizar en la primera fila*/

        /*Inicia la tabla*/
        echo("<table>");
        /* inicia la primera fila con el color asignado */
        echo ("<tr bgcolor=$colorear>");

        /*Ciclo para crear la tabla*/
        for ($iterar = $inicio; $iterar <= $TAM; $iterar++) {

          /*si el valor de iterar es diferente a un multiplo de N imprime el valor dentro de una celda*/
          if ($iterar % $N  != 0){
            echo ("<td> $iterar </td>");

          /* si el iterador es multiplo de N */
          }elseif ($iterar != $TAM) {
            echo ("<td>$iterar</td>"); /*imprime el valor dentro de una celda*/ 

             /* alterna el valor de la variable $colorear que es el encargado de asignar las clases de las filas*/
            $colorear = ($colorear == "$color_1") ? "$color_2" :"$color_1" ;

            /*cierra fila e inicia otra con otra clase*/
            echo ("</tr> <tr bgcolor= $colorear>");

            /*Si el iterador llega al final imprime el valor en una celda y lugo cierra la fila */
          }else {
            echo ("<td>$iterar</td>");
            
            echo ("</tr>");

          }

        }
        /* Cierra la tabla*/
        echo("</table>");



      ?>

            <br>
      <hr>
      <a href="con_get.php">Volver a atrás</a>
    </CENTER>
  </body>
 </html>