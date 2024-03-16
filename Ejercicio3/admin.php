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
        <h1>Consola de Administracion</h1>
        <?php
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
            
            if(isset($_SESSION['esAdmin'])){

                
                echo "Aqui estarían los controles para la administraci&oacuten de la web.";
            }
            else {
                echo "Usted no tiene permisos de administrador";

            }
        ?>
	</main>


	<?php include 'sidebarDer.php'; ?>

	<?php include 'pie.php'; ?>

</div> <!-- Fin del contenedor -->

</body>
</html>