<?php
	//notifica todos los errores
	error_reporting(E_ALL);

	define("endl", "<br/>");
	$val = $_POST["elemento"];

	print("El valor recibido es: $val".endl);

	if(file_exists($val)){
		print("Existe el archivo".endl);
	}
	else{
		print("No existe el archivo".endl);
	}

	if(is_file($val)){
		print("Es Archivo".endl);
	}
	else{
		print("No es archivo".endl);
	}

		if(is_dir($val)){
		print("Es directorio".endl);
	}
	else{
		print("No es directorio".endl);
	}

		if(is_link($val)){
		print("Es enlace simbolico".endl);
	}
	else{
		print("No es enlace simbolico".endl);
	}

		if(is_readable($val)){
		print("Se puede leer".endl);
	}
	else{
		print("No Se puede leer".endl);
	}

	if(is_writable($var)){
		print("Se puede escribir".endl);
	}
	else{
		print("No Se puede escribir".endl);
	}

		if(is_executable($var)){
		print("Se puede ejecutar".endl);
	}
	else{
		print("No Se puede ejecutar".endl);
	}

?>