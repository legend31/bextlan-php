<?php
//CReo una funcion para la conexion
function conectarse()
{
	$servidor="localhost";
	$user="root";
	$pass="";
	$bd="mis_contactos";
	//Mi primer objeto xD
	$conectar= new mysqli($servidor,$user,$pass,$bd);

	return $conectar;
}
//invoco la funcion
$conexion=conectarse();
?>