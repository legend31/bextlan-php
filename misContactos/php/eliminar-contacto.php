<?php
$email=$_POST["email_slc"];
include ("conexion.php");
$consulta="DELETE FROM contactos WHERE email='$email'";
//ejecutar consulta es un boolean
$ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta)
	$mensaje="Se Elimino correctamente a $email";
	else
		$mensaje="No se pudo eliminar $email";
$conexion->close();
header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>