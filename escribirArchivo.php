<?php
	define("endl", "<br/>");

	//abre archivo para escribir en el si no esta lo crea
	$manejador = fopen("archivoEscribir.txt", "a");
	$cadena = "Esto es una cadena ";

	if( @fwrite($manejador, $cadena)){
		print("Se escribio con exito".endl);
	}
	else{
		print("No se escribio con exito".endl);
	}

	//escribe solo la longitud establecido en este caso 10
	$cadena2 = "con cadena recortada";
	if( @fwrite($manejador, $cadena, 10)){
		print("Se escribio con exito".endl);
	}
	else{
		print("No se escribio con exito".endl);
	}
?>