<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $tituloPagina ?></title>
	<link rel="stylesheet" type="text/css" href="/estilo.css" />
</head>
<body>
<div id="contenedor">
<?php
require('comun/cabecera.php');
require('comun/sidebarIzq.php');
?>
<main>
	<article>
	<?= $contenidoPrincipal ?>
	</article>
</main>
<?php
require('comun/sidebarDer.php');
require('comun/pie.php');
?>
</div>
</body>
</html>