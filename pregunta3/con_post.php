<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>

    <meta charset= "utf-8" /> <!--permite caracteres acentuados -->
    <title>Pregunta 3</title>   <!--titulo de la pestaña -->
    <link rel="stylesheet" href="../css/estilo.css">

  </head>
  <body>
    <CENTER>

      <H2>Método POST</H2><HR>

      <!-- inicia el método formulario -->
      <FORM METHOD="POST" ACTION="procesar_post.php">
        <TABLE>
          <TR>
            <TD ALIGN="LEFT">N:</TD>
            <!--Input para ingresar el largo de la fila -->
            <TD ALIGN="RIGHT" COLSPAN="3"><INPUT TYPE="TEXT" NAME="N" SIZE=25 maxlength="25"></TD>
          </TR>
          <TR>
            <TD ALIGN="LEFT">Tamaño:</TD>
            <!--Input para ingresar el tamaño de la tabla -->
            <TD ALIGN="RIGHT" COLSPAN="3"><INPUT TYPE="TEXT" NAME="TAM" SIZE="25"></TD>
          </TR>
          <TR>
            <TD ALIGN="LEFT">Color 1*</TD>
            <!--Input para ingresar color 1 para la fila -->
            <TD ALIGN="LEFT" COLSPAN="3"><INPUT TYPE="TEXT" NAME="color1" SIZE="25"></TD>
          </TR>
            <TR>
            <TD ALIGN="LEFT">Color 2*</TD>
            <!--Input para ingresar color 2 para la fila -->
            <TD ALIGN="LEFT" COLSPAN="3"><INPUT TYPE="TEXT" NAME="color2" SIZE="25"></TD>
          </TR>
        </TABLE><HR><BR>
        <p>* Los colores deben ser en formato HTML o nombres como: blue, red, salmon, green...</p>
        <INPUT TYPE="SUBMIT" value ="Enviar"> <INPUT TYPE="RESET">
      </FORM>
    </CENTER>
  </body>
 </html>