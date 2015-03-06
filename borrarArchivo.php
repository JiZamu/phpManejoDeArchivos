<?php
	//borra un archivo
	if(@unlink("archivoBorrar.txt")){
		print("Se a borrado el documento");
	}
	else
	{
		print("No se a podido borrar");
	}
?>