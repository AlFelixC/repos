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
        <form action="procesarLogin.php" method="post">
            Usuario: <input type="text" name="usuario"><br>
            Contraseña: <input type="password" name="contrasena"><br>
            <input type="submit" value="Iniciar Sesion">
        </form>
	</main>


	<?php include 'sidebarDer.php'; ?>

	<?php include 'pie.php'; ?>

</div> <!-- Fin del contenedor -->

</body>
</html>