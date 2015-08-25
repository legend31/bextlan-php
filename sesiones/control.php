<?php
	if ($_POST["user"]=="fer" && $_POST["pass"]=="123") {
		//inicio la sesion
		session_start();
		//Declaro mis variables de sesion
		$_SESSION["autentificado"]=true;
		$_SESSION["user"]=$_POST["user"];
		header("Location: archivo-protegido.php");
	}
	else{
		header("Location: index.php?error=si");
	}
?>