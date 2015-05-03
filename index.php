<?php

/*
	Toda la aplicación se ve a travez de este archivo.
	Aqui se agregan todos los llamasdos al JS y el CSS 

*/

	require_once("config.php");

	if (!empty($_GET["accion"])) {

		$accion = $_GET["accion"];

	}else{

		$accion = "home"; // Directorio base por defecto.
	}

// Validación si existe la ruta. 
	if (is_file("controller/".$accion."Controller.php")) {

		require_once("controller/".$accion."Controller.php"); // Incluimos el archivo 

	}else{
		
		require_once("controller/errorController.php"); // Enviamos a Error.
	}



?>