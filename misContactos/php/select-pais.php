<?php
	if(!$registro["pais"])
	include("conexion.php");

	$consulta="SELECT * FROM pais order by pais";
	//Este -> es lo q se usa en php para invocar un metodo
	$ejecutar_consulta= $conexion->query($consulta);
	//El while
	while ($registro_pais=$ejecutar_consulta->fetch_assoc())
	{
		//Hago el encoding para los caracteres q no son de ingles
		$nombre_pais=utf8_encode($registro_pais["pais"]);
		//Aqui los imprimo 
		echo "<option value='$nombre_pais'";
		if($nombre_pais==$registro["pais"])
			echo " selected";
		echo ">$nombre_pais</option>";
	}
	$conexion->close();
?>