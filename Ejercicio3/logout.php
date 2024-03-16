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
    <?php
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        unset($_SESSION['login']);
        unset($_SESSION['nombre']);

        echo '<link rel="stylesheet" type="text/css" href="ruta/estilos.css">';

        if(isset($_SESSION['esAdmin'])){

            unset($_SESSION['esAdmin']);
        }

        session_destroy();


        echo "Gracias por visitar nuestra web. Hasta pronto.";
    ?> 
	</main>


	<?php include 'sidebarDer.php'; ?>

	<?php include 'pie.php'; ?>

</div> <!-- Fin del contenedor -->

</body>
</html>