<?php
	define("endl", "<br/>");

	$caracteres = filesize("archivoLeer.txt");
	$manejador = fopen("archivoLeer.txt", "r");

	//leer el numero de caracteres especificado
	$cadena = fread($manejador, 12);
	print("Primer cadena leida $cadena".endl);

	$cadena = fread($manejador, 12);
	print("Segunda cadena leida $cadena".endl);

	print("Tiene $caracteres caracteres");

	//retorna el puntero al inicio 
	rewind($manejador);

	print("Estraccion de caracteres".endl);
	for($i = 1; $i <= $caracteres; $i++){
		$caracter = fgetc($manejador);
		print($caracter.endl);
	}

	fclose($manejador);
?>