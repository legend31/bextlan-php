<?php
	/*si envio mis datos con GET se crea por defecto una 
	variable $_GET, si es con POST una _POST
	*/
	//dentro de esa variable se pasan todos los datos( sus valores)
	if (isset($_GET["btnEnviar"])) {
		echo "Mandaste tus datos usando GET"."<br> y enviaste: ".$_GET["pass"];
	} else {
		echo "Mandaste tus datos usando POST"."<br> y enviaste: ".$_POST["pass"];
	}
	//$hola="Holo";
	//echo "<br>existe? ".isset($hola);
?>