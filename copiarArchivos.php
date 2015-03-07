<?php
	define("endl", "<br/>");

	$original = "archivoEscribir.txt";
	$copia = "archivoCopia.txt";
	//se intenta copiar el archivo

	if(@copy($original, $copia)){
		print("El fichero se a copiado".endl);
	}
	else{
		print("El fichero no se a copiado".endl);
	}
?>