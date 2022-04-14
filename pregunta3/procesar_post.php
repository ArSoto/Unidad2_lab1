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
        
        echo "<H2> Método $metodo</H2>";

        /*Iniacialización de variables*/
        $inicio = 1;
        $TAM = $_POST["TAM"];     /*asigna el valor del tamaño de la tabla a través de la función $_post*/
        $N = $_POST["N"];     /*asigna el valor del largo de la fila través de la función $_post*/
        $color_1 = $_POST["color1"];    /*asigna el color de la fila 1 través de la función $_post*/
        $color_2 = $_POST["color2"];    /*asigna el color de la fila 2 través de la función $_post*/

        $colorear = "$color_1";   /* almacena el color a utilizar en la primera fila*/

        /*Inicia la tabla*/
        echo("<table>");
        echo ("<tr bgcolor=$colorear>");            /* inicia la primera fila con el color asignado */

        /*Ciclo para crear la tabla*/
        for ($iterar = $inicio; $iterar <= $TAM; $iterar++) {

          /*si el valor de iterar es diferente a un multiplo de N imprime el valor dentro de una celda*/
          if ($iterar % $N  != 0){
            echo ("<td> $iterar </td>"); 

          /* si el iterador es multiplo de N */
          }elseif ($iterar != $TAM) {
            echo ("<td>$iterar</td>");    /*imprime el valor dentro de una celda*/ 

            $colorear = ($colorear == "$color_1") ? "$color_2" :"$color_1" ;    /* alterna el valor de la variable $colorear que es el encargado de asignar las clases de las filas*/

            echo ("</tr> <tr bgcolor= $colorear>");     /*cierra fila e inicia otra con otra clase*/

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
      <a href="con_post.php">Volver a atrás</a>
    </CENTER>
  </body>
 </html>