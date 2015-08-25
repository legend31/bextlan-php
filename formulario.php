<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<hgroup><h1>Formulario con GET</h1></hgroup>
	<form name="envia-get" action="envio.php" method="get"
	enctype="application/x-www-form-urlencoded">
	<label>Ingresa tu nombre </label>
	<input type="text" name="nom">
	<br><br>
	<label>Ingresa contraseña </label>
	<input type="password" name="pass">
	<br><br>
	<input type="submit" name="btnEnviar" value="Enviar-get">
	</form>

	<hgroup><h1>Formulario con POST</h1></hgroup>
	<form name="envia-get" action="envio.php" method="post"
	enctype="application/x-www-form-urlencoded">
	<label>Ingresa tu nombre </label>
	<input type="text" name="nom">
	<br><br>
	<label>Ingresa contraseña </label>
	<input type="password" name="pass">
	<br><br>
	<input type="submit" name="btnEnviar" value="Enviar-post">
	</form>
	<?
		//El metodo get si te muestra la info q mandas en el navegador
		// El metodo POST no lo hace
	?>
</body>
</html>