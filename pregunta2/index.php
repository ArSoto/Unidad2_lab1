<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
    
    <meta charset= "utf-8" /> <!--permite caracteres acentuados -->
    <title>Pregunta 2</title>   <!--titulo de la pestaña -->
    <link rel="stylesheet" href="../css/estilo.css">

  </head>
  <body>
    <center>

      <!-- Titulos de la pagina -->
      <h1>Ejercicio 2 </h1>
      <h2>Tabla de n filas y n columnas, alternando el color de las filas</h2>

      <!-- comienza el codigo PHP -->

      <?php

          $inicio = 1;
          $TAM = 100;   /* tamaño de la tabla*/
          $N = 5;   /*largo de las filas*/



          $colorear = "color1"; /*asigna el color 1 (blanco) a variable $colorear */

          /* declaracion para construir tabla*/
          echo("<table>");
          echo ("<tr class= $colorear>");  /* inicia fila y le asigna una clase*/

          /* iteración para crear las celdas de la tabla*/
          for ($iterar = $inicio; $iterar <= $TAM; $iterar++) {

            /*si el valor de iterar es diferente a un multiplo de N */
            if ($iterar % $N  != 0){
              echo ("<td> $iterar </td>");

            /* si el iterador es multiplo de N imprime el valor dentro de una celda, cierra la fila y comienza otra */
            }elseif ($iterar != $TAM) {
              echo ("<td>$iterar</td>");

              $colorear = ($colorear == "color1") ? "color2" :"color1" ; /* alterna el valor de la variable $colorear que es el encargado de asignar las clases de las filas*/

              echo ("</tr> <tr class= $colorear>"); /*cierra fila e inicia otra con otra clase*/

            /*Si el iterador llega al final imprime el valor en una celda y lugo cierra la fila */
            }else {
              echo ("<td>$iterar</td>");
              
              echo ("</tr>");

            }

          }
          /* Cierra la tabla*/
          echo("</table>");
        

      ?>
    </center>
  </body>
</html>
