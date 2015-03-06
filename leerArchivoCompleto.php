<?php
	//este script leer todo el archivo
	define("endl", "<br/>");
	$manejador = fopen("archivoLeer.txt", "r");
	print("<strong>Texto leido</strong>".endl);
	$numCaracteres = fpassthru($manejador);
	print(endl."Numero de caracteres: $numCaracteres".endl);
	fclose($manejador);
?>