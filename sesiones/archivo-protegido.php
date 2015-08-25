<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesion Segura</title>
</head>
<body>
<?php
	//para no estar validando en cada archivo incluyo el archivo sesion
	include("sesion.php");
	echo "Bienvenido ".$_SESSION["user"]." a tu sesion segura!<br><br>"
?>
<a href="archivo-protegido2.php">Ir a Pagina 2</a><br><br>
<a href="salir.php">Cerrar Sesion</a>
</body>
</html>
