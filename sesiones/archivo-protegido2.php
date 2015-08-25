<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Archivo Protegido 2</title>
</head>
<body>
	<?php
		include("sesion.php");
		echo "Bienvenido al archivo 2 ".$_SESSION["user"]."<br><br>";
	?>
	<a href="salir.php">Cerrar Sesion</a>
</body>
</html>