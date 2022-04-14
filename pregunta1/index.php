<!DOCTYPE html>
<html class="no-js" lang="es">

  <head>

    <meta charset= "utf-8" /> <!--permite caracteres acentuados -->
    <title>Pregunta 1</title>   <!--titulo de la pestaña -->
    <link rel="stylesheet" href="../css/estilo.css">

  </head>
  <body>

    <center>

      <!-- Titulos de la pagina -->

      <h1>Ejercicio 1 </h1>
      <h2>Tabla de 10 filas y 10 columnas</h2>


      <!-- comienza el codigo PHP -->
      <?php

          $inicio = 1;
          $fin = 100;

          /* declaracion para construir tabla*/
          echo("<table>");
          echo ("<tr>");

          /* iteración para crear las celdas de la tabla*/
          for ($iterar = $inicio; $iterar <= $fin; $iterar++) {

            /*si el valor de iterar es diferente a un multiplo de 10 imprime el valor dentro de una celda*/
            if ($iterar%10 != 0){ 
              echo ("<td> $iterar </td>");

            /* si el iterador es diferente del valor final y es multiplo de 10 imprime el valor dentro de una celda, cierra la fila y comienza otra */
            }elseif ($iterar != $fin) {
              echo ("<td>$iterar</td>");
              echo ("</tr> <tr>");

            /*Si el iterador llega al final imprime el valor en una celda y lugo cierra la fila */
            }else {
              echo ("<td>$iterar</td>");
              echo ("</tr>");

            }

          }
          /*cierra la tabla*/
          echo("</table>");
        

      ?>

      <br>
      <hr>
      <a href="../">Volver a atrás</a>



    </center>

  </body>
</html>
