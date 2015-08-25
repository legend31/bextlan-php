<?php
	if (!$_COOKIE["idio_solicitado"]) {
		header("Location: pedir-idioma.php");
	}
			else if ($_COOKIE["idio_solicitado"]=="es") {
			header("Location: espaniol.php");
		}
		else if ($_COOKIE["idio_solicitado"]=="en") {
			header("Location: ingles.php");
		}
?>