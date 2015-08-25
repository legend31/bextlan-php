<form id="alta-contacto" action="php/agregar-contacto.php"
method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Alta de Contactos</legend>
		<div>
		<label for="email">Email: </label>
		<!-- El place Holder es como el hint en android-->
		<input name="email_txt" type="email" id="email" 
		class="cambio" placeholder="Email" title="Tu email" required>
		</div>
		<div>
		<label for="nombre">Nombre: </label>
		<!-- El place Holder es como el hint en android-->
		<input name="nombre_txt" type="text" id="nombre" 
		class="cambio" placeholder="Nombre" title="Tu Nombre" required>
		</div>
		<div>
		<label for="m">Sexo: </label>
		<input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M" required>
		&nbsp;<label for="m"> Masculino</label>
		&nbsp;&nbsp;&nbsp;
		<input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F" required>
		&nbsp;<label for="m"> Femenino</label>
		</div>
		<div>
		<label for="nacimiento">Fecha Nacimiento</label>
		<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Fecha de Nacimiento" required>
		</div>
		<div>
		<label for="telefono">Telefono</label>
		<input type="number" id="telefono" class="cambio" name="telefono_txt" title="Telefono" required>
		</div>
		<div>
		<label for="pais">Pais</label>
		<select class="cambio" name="pais_slc" id="pais" required>
			<option value="">- - -</option>
			<?php
				include("select-pais.php");
			?>
		</select>
		</div>
		<div>
		<label for="foto">Foto: </label>
		<input type="file" id="foto" name="foto_fls" title="Tu foto">
		</div>
		<div>
			<input type="submit" id="enviar-alta" class="cambio" name="btn_enviar" value="Agregar">
		</div>
		<?php include("php/mensajes.php");?>
	</fieldset>
</form>