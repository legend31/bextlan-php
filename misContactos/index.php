<?php
//Para q no me salgan los notice pero si los mensajes de errro
error_reporting(E_ALL ^ E_NOTICE);
	$op=$_GET["op"];
	switch ($op) {
		case 'alta':
			$contenido="php/alta-contacto.php";
			$titulo="Alta de Contactos";
		break;
		case 'baja':
			$contenido="php/baja-contacto.php";
			$titulo="Baja de Contactos";
		break;
		case 'cambios':
			$contenido="php/cambios-contacto.php";
			$titulo="Cambios de Contactos";
		break;
		case 'consulta':
			$contenido="php/consultas-contacto.php";
			$titulo="Consulta de Contactos";
		break;
		default:
			$contenido="php/home.php";
			$titulo="Mis contactos";
			break;
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo;?></title>
	<!--Para el CSS-->
	<link rel="stylesheet" href="css/mis-contactos.css">
	<!--Para el JavaScript-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/miscontactos.js"></script>
	<script>
	!window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>");
	</script>
	
</head>
<body>
	<section id="contenido">
		<nav>
			<ul>
				<li><a class="cambio" href="index.php">Home</a></li>
				<li><a class="cambio" href="?op=alta">Alta de Contacto</a></li>
				<li><a class="cambio" href="?op=baja">Baja de Contacto</a></li>
				<li><a class="cambio" href="?op=cambios">Cambios de Contacto</a></li>
				<li><a class="cambio" href="?op=consulta">Consultas de Contacto</a></li>
			</ul>
		</nav>
	</section>
	<section id="principal">
	<?php
		include($contenido);
	?>
	</section>
</body>
</html>