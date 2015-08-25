<?php
include("conexion.php");
$consulta="SELECT email from contactos order by email";
$ejecutar_consulta=$conexion->query($consulta);
while ($registro=$ejecutar_consulta->fetch_assoc()) {
	$email=utf8_encode($registro["email"]);
	echo "<option value='$email'";
	//Con este if le agrego la propiedad selected al combo
	if($_GET["contacto_slc"]==$email)
	echo "selected>$email</option>";
	else
	echo ">$email</option>";
}
//$conexion->close();
?>