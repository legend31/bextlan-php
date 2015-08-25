<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BorrarCookie</title>
</head>
<body>
<?php
	//No hya una forma de borrar una cookie lo q estoy haciendo es caducarla con tun time (-)
	setcookie("idio_solicitado","",time()-1,"/");
?>
<a href="usar-cookie.php">Regresar</a>
</body>
</html>