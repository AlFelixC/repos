<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

<div id="contenedor"> <!-- Inicio del contenedor -->

	<?php include 'cabecera.php'; ?>

	<?php include 'sidebarIzq.php'; ?>

	<main>
	  <article>
		<h1>Bienvenido a mi web.</h1>
        <?php
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }

            if(isset($_SESSION['login']) || isset($_SESSION['esAdmin'])) {

                //Usuarios logeados
                echo "<img src='img/ej2vader.png' alt='Bienvenido a mi web'>";
                echo "";
                echo "Contenido para usuarios que han hecho login. ";
                echo "En esta zona podras encontrar elementos para la compra y sus pedidos";

            } else {
                //Usuarios no logeados
                echo "No hay contenido para usuarios no logeados. Por favor, <a href='login.php'> haga login</a> para ver tu contenido.";
            }
        ?>

	  </article>

</main>


	<?php include 'sidebarDer.php'; ?>

	<?php include 'pie.php'; ?>

</div> <!-- Fin del contenedor -->

</body>
</html>