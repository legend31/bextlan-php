<form id="f-baja-contacto" name="baja_frm" action="php/eliminar-contacto.php"method="post">
	<fieldset>
		<legend>Baja de Contacto</legend>
		<div>
			<label for="email">Email: </label>
			<select name="email_slc" id="email" class="cambio" required>
				<option value="">- - -</option>
			<?php include("select-email.php"); ?>
			</select>
		</div>
		<div>
			<input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="Eliminar">
		</div>
		<?php include("php/mensajes.php"); ?>
	</fieldset>
</form>