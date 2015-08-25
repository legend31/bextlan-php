<form id="cambio-contacto" action="php/modificar-contacto.php"
method="post" enctype="multipart/form-data">
	<fieldset>
	    <div>
		<label for="email">Email: </label>
		<!-- El place Holder es como el hint en android-->
		<input name="email_txt" type="email" id="email" 
		class="cambio" placeholder="Email" title="Tu email" value="<?php echo $registro["email"];?>" disabled required>
		<input type="hidden" name="email_hdn" value="<?php echo $registro["email"]; ?>" />
		</div>
		<div>
		<label for="nombre">Nombre: </label>
		<!-- El place Holder es como el hint en android-->
		<input name="nombre_txt" type="text" id="nombre" 
		class="cambio" placeholder="Nombre" title="Tu Nombre" value="<?php echo $registro["nombre"];?>" required>
		</div>
		<div>
		<label for="m">Sexo: </label>
		<input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M" <?php if($registro["sexo"]=="M" ) echo "checked";?> required>
		&nbsp;<label for="m"> Masculino</label>
		&nbsp;&nbsp;&nbsp;
		<input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F" <?php if($registro["sexo"]=="F" ) echo "checked";?> required>
		&nbsp;<label for="m"> Femenino</label>
		</div>
		<div>
		<label for="nacimiento">Fecha Nacimiento</label>
		<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Fecha de Nacimiento" value="<?php echo $registro["nacimiento"];?>"required>
		</div>
		<div>
		<label for="telefono">Telefono</label>
		<input type="number" id="telefono" class="cambio" name="telefono_txt" title="Telefono" value="<?php echo $registro["telefono"];?>"required>
		</div>
		<div>
		<label for="pais">Pais</label>
		<select class="cambio" name="pais_slc" id="pais" required>
			<option value="">- - -</option>
			<?php include("php/select-pais.php");?>
		</select>
		</div>
		<div>
		<label for="foto">Foto: </label>
		<input type="file" id="foto" name="foto_fls" title="Tu foto">
		<input type="hidden" name="foto_hdn" value="<?php echo $registro["imagen"]; ?>" />
		</div>
		<div>
			<img src="<?php echo "img/fotos/".$registro["imagen"];?>">
		</div>
		<div>
			<input type="submit" id="enviar-alta" class="cambio" name="btn_enviar" value="Agregar">
		</div>
		<?php include("php/mensajes.php");?>
	</fieldset>
</form>