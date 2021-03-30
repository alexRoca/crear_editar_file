<?php
	
	$texto_escribir="texto de prueba";
	
	
	
	//******************prueba-prueba*******
		if (file_exists("mensajeError.txt")){
			$archivo = fopen("mensajeError.txt", "a");
			fwrite($archivo," ".$texto_escribir);
			fclose($archivo);
		}else{
			$archivo = fopen("mensajeError.txt", "w");
			fwrite($archivo," ".$texto_escribir);
			fclose($archivo);
		   }
	//******************prueba-prueba*******
	
	
	
	echo "se genero y guardo file";
	