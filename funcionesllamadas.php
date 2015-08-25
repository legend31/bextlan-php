<?php
		$array = array("Fer","Susi");
		//Usando el for each
		foreach ($array as $nombres) {
			hola($nombres);
		}
?>
<?php
	function hola($s){
		echo "Hola $s<br>";
	}
?>