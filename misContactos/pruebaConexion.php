<?php
/*
				Pasos
	1)Conectarse al Servidor.Se necesita:
		a)servidor
		b)user (root es por defecto en XAMPP)
		c)pass del user (Por defecto no tiene)

*/
//Or die corta la ejecuacion del programa y manda el mensaje entre los parentesis
$conexion = mysql_connect("localhost","root","") or die("Fallo Conexion");
//echo "Estas Conectado a MySQL<br><br>";

//2) Selecionar la BD a usar
mysql_select_db("mis_contactos") or die("Fallo Seleccion de BD");
//echo "Seleccion Exitosa!<br><br>";
//3) Hacer una Consulta
$consulta= "SELECT * FROM pais";
//4)Ejecutar la consulta
$ejecutar_consulta=mysql_query($consulta) or die("Fallo en la Consulta");
echo "Consulta exitosa:<br>";
//5) mostrar los datos
while ($regristros=mysql_fetch_array($ejecutar_consulta)) {
	echo "<br>".$regristros["pais"];
}
//6)cerrar la base
	mysql_close($conexion) or die("No se pudo cerrar la conexion");
	echo "<br><br>Se cerro la conexion";
?>
