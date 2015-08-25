<?php
	$nom="fer";
	$pass="123";
	if($_GET["nombre"]==$nom && $_GET["pass"]==$pass)
		echo "Ingreso Exitoso";
		else
		 header("Location: formulario2.php?error=si");
?>