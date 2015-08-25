<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validacion de Datos</title>
	<!--Aqui pondre mi script de Java-->
	<script>
		function validarDatosGET(){
			var verificar=true;
	/*Document es el elemento padre de la pagina,validacion es el formulario
	nombre es el input y value es una funcion.
	*/
	/* hice de dos formas el acceso a los elementos, la anterior y por ID*/
				if (!document.validacion.nombre.value|| !(document.getElementById("idpass").value)) {
					alert("Campos Obligatorios");
					document.validacion.nombre.focus();
					verificar=false;
				}
				//Cuando le pones el mismo nombre a 2 o mas elementos se crea aut un arreglo
				//Para radio button es check y no value
		
				if(verificar==true){
					document.validacion.submit();
				}
		}
		// Esta es una forma mejor vista de hacer lo de Java Script sin usar el onclick
					window.onload=function(){
				document.getElementById("enviarGet").onclick=validarDatosGET;
			}
	</script>
</head>
<body>
<?php
//Esto lo puse yo
if(isset($_GET["error"])){
		if($_GET["error"]=="si")
		echo "Error de Credenciales";
}

?>
	<hgroup>
		<h1>Formulario con GET</h1>
	</hgroup>
<form name="validacion" action="validar.php" method="get" enctype="application/x-www-form-urlencoded">
	<label >Ingresa tu nombre:</label>
	<input type="text" name="nombre">
	<br><br>
	<label >Ingresa tu password:</label>
	<input id= "idpass" type="password" name="pass">
	<br><br>
	<!--radio buttons se deben de llamar igual para solo escoger uno
	// espacio en balnco &nbsp -->
	<input type="radio" name="sexo" value="M">
	Masculino&nbsp
	<input type="radio" name="sexo" value="F">
	Femenino&nbsp
	<br><br>
	<!-- Este tipo de boton no envia hasta q y no le asigne una accion q he definido con java script-->
	<input id="enviarGet" type="button" name="btnEnviar" value="Enviar GET" >
	<!--Para enviar info escondida-->
	<input type="hidden" name="enviar_hdn" value="get">
</form>
</body>
</html>
