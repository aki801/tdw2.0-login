<?php /* esto inicia un bloque de codigo en php */

  /*echo "funciona php"; echo permite imprimir resultados*/

  $user = $_GET["usuario"];
  $pass = $_GET["contraseña"]; /*guarda la contraseña en la variable pass*/

  /*Si el usuario y clave no coincide se envia un mensaje de error*/
  if($user != "k" || $pass != "1234"){
    echo "No estas autorizado";
  }
  else {
    /*Inicia bloque autorizado*/

/* esto termina un bloque de codigo en php */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/main.css">
   <title>Login-incorrecto</title>
</head>

<body>
        <header> <!-- encabezado -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.html">Inicio</a>
                    |
                    <a href=" ">Ingresar</a>
                    |
                    <a href=" ">Nuevo usuario</a>
                </nav>
        </header>

        <div id="contenido">
          <p>Bienvenido a mi Mundo!</p>

        </div>  <!--termina contenido-->

        <footer>
             <p>vuelve pronto</p>
        </footer>

</body>
</html>
<?php
  } /*termina bloque autorizado (else)*/
?>
