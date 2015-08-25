<script>
	window.onload=function(){
		var lista=document.getElementById("contacto-lista");
		lista.onchange=seleccionarContacto;

		function seleccionarContacto(){
			//Al no ponerle donde lo hace en el index
			//es como el header Location : en Php
			window.location="?op=cambios&contacto_slc="+lista.value;
		}
	}
</script>
<form id="cambio-contacto" name="cambio_frm" action="php/modifcar-contacto.php" method="post" enctype="mulyipart/form-data">
	<fieldset>
		<legend>Cambio contacto</legend>
		<div>
			<label for="contacto-lista">Contacto: </label>
			<select name="contacto_slc" id="contacto-lista" class="cambio" required>
			<option value="">- - -</option>
			<?php include("select-email.php");?>
			</select>
		</div>
		<?php 
		if ($_GET["contacto_slc"]!=null) {
			$conexion2=conectarse();
			$contacto=$_GET["contacto_slc"];
			$consulta_contacto="SELECT * FROM contactos where email='$contacto'";
			$ejecucion_consulta=$conexion2->query($consulta_contacto);
			//creo el array asociativo
			$registro=$ejecucion_consulta->fetch_assoc();
			//Creo un archivo para el formulario dinamico en lugar de meterlo aqui 
			include("php/cambio-form.php");
		}
		include("php/mensajes.php");
		?>
	</fieldset>
</form>