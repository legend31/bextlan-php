<?php
	/*if(isset($_GET["idioma"])){
		if($_GET["idioma"]=="es")
			echo "Seleccionaste Espa&ntildeol";
		elseif ($_GET["idioma"]=="en") {
			echo "Seleccionaste Ingles";
		}
	}*/
	/*nombre,variable q uso,tiempo,directorio donde vivira. 
	Los 86400=24 h en segundos.La / es q ecistira en todo este directorio*/
	setcookie("idio_solicitado",$_GET["idioma"],time()+86400,"/");
	header("Location: usar-cookie.php");

?>