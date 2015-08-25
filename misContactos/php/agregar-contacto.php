<?php
error_reporting(E_ALL ^ E_NOTICE);
$email=$_POST["email_txt"];
$nombre=$_POST["nombre_txt"];
$sexo=$_POST["sexo_rdo"];
$nacimiento=$_POST["nacimiento_txt"];
$telefono=$_POST["telefono_txt"];
$pais=$_POST["pais_slc"];
//$foto=$_POST["foto_fls"];
//Por si no se subio una imagen se escoge segun sexo
//Operador ternario (condicion)?true:false;

$imagen_generica=($sexo=="M")?"amigo.png":"amiga.png";

//verificamos email(primary key)
include("conexion.php");
$consulta="SELECT * from contactos where email='$email'";
$ejecutar_consulta=$conexion->query($consulta);
//Veo cuantos registros me regresa
$num_regs=$ejecutar_consulta->num_rows;
if($num_regs==0){
	//incluyo una funcion para la imagen
	include("funciones.php");
	//Tipo de imagen q se subio, $_FILES se crea al subir una imagen
	$tipo=$_FILES["foto_fls"]["type"];
	$archivo=$_FILES["foto_fls"]["tmp_name"];
	//email aqui es el nombre de a imagen
	$img_subida=subir_imagen($tipo,$archivo,$email);
	echo "<br>".$img_subida;
	//Si la foto viene vacia asigno la imagen generica
	$imagen=(empty($archivo))?$imagen_generica:$img_subida;

	$consulta="INSERT INTO contactos values('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen')";
	//utf enconde para los caracteres raros
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
	if($ejecutar_consulta)
		$mensaje="Contacto Agregado con exito";
}
	else{
		$mensaje="Contacto ya existe en Agenda!";
	}
$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>