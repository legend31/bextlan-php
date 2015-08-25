<?php
	$conexion=mysql_connect("localhost","root","") or die("Fallo Conexion");
	mysql_select_db("mis_contactos") or die("Fallo Seleccion");
	$borrar_query="delete from pais where id_pais=10";
	/*A este se le pasan 2 parametros la consulta y la conexion de enlace
	a mi se me olvido pero en la doc dice q si no lo especifico manda la 
	ultima q se abrio.Asi q en algo mas complejo es mejor pasarla
	*/
	$borradoejecucion=mysql_query($borrar_query) or die("Fallo en Borrado");
	//Con el SQL afected ROW yo compuerbo si lo hizo o no
	if(mysql_affected_rows()==1)
		echo "Borrado Exitoso";
	else 
		echo "Ya se habia Borrado";
	mysql_close($conexion);
?>