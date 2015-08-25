<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones con PHP</title>
	<style>
	form{
		margin: 0 auto;
		width: 400px;
	}
	h1,form{
		text-align: center;
	}
	</style>
</head>
<body>
<?php
	if(isset($_GET["error"])){
		if ($_GET["error"]=="si") 
			echo "<h1>Verifica tus Datos</h1>";
	}
	else
	echo "<h1>Ingresa tus Datos</h1>";
?>
	<form name="fautenticacion"action="control.php" method="post" enctype="application/x-www-form-urlencoded">
		<label >Usuario: </label>
		<input type="text" name="user"><br><br>
		<label >Password:</label>
		<input type="password" name="pass"><br><br>
		<input type="submit" name="btnEntrar" value="Entrar">
	</form>
</body>
</html>