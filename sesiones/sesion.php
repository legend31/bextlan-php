<?php
session_start();
//Evaluo q la sesion aun este activa en control.php
if (!$_SESSION["autentificado"]) {
	header("Location: salir.php");
}
?>