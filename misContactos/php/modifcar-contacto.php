<?php
error_reporting(E_ALL ^ E_NOTICE);
$email=$_POST["email_hdn"];
$nombre=$_POST["nombre_txt"];
$sexo=$_POST["sexo_rdo"];
$nacimiento=$_POST["nacimiento_txt"];
$telefono=$_POST["telefono_txt"];
$pais=$_POST["pais_slc"];
if(empty($_FILES["fotos_fls"]["tmp_name"]))
{
	//si eso es cierto no se modifico la imagen
	$imagen=$_POST["foto_hdn"];
}
else
{
	include("funciones.php");
	$tipo=$_FILES["fotos_fls"]["type"];
	$archivo=$_FILES["fotos_fls"]["tmp_name"];
	$imagen=subir_imagen($tipo,$archivo,$email);
}
//Actualizando en la base
include("conexion.php");
$actualizacion_query="UPDATE contactos SET nombre='$nombre',sexo='$sexo',nacimiento='$nacimiento',telefono='$telefono',pais='$pais',imagen='$imagen' where email='$email'";
$ejecucion=$conexion->query($actualizacion_query);
$afectados=$conexion->affected_rows;
if($afectados>0)
$mensaje="Actualizacion exitosa";
else
$mensaje="No se Pudo actualizar";
header("Location: ../index.php?op=cambios&mensaje=$mensaje");
?>