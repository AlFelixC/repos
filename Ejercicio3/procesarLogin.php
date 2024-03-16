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

        $username = $_POST['usuario'];
        $password = $_POST['contrasena'];

        //Se comprueba si es valido

        if(($username == 'admin' && $password == 'adminpass') || ($username == 'user' && $password == 'userpass')){

            $_SESSION['login'] = true;
            $_SESSION['nombre'] = $username == 'user' ? 'Usuario' : 'Administrador';

            if($username == 'admin'){
                $_SESSION['esAdmin'] = true;
            }

            echo "Bienvenido, a la web " . $_SESSION['nombre'] . ". Navegue seguro y libremente.";
        }
        else {

            echo "El usuario o la contraseña son incorrectos.";
        }

    ?>
	</main>


	<?php include 'sidebarDer.php'; ?>

	<?php include 'pie.php'; ?>

</div> <!-- Fin del contenedor -->

</body>
</html>