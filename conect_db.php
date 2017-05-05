<?php 
	session_start();

			//te voy a mostrar las formas de conexion, como te dije tienes 3 tipos, la mas recomendable es la Orientada a Objetos
			//Parece tutorial de youtube ajajjajaja
			
			// Direccion de conexion a base de datos POR DEFECTO SE UTILIZA LOCALHOST o 127.0.0.1
			// como te logueas en phpmyadmin? intente y no pude...
		 	$url = "localhost";
			// Usuario en base de datos
			$usuario = "root"; 
			// Contraseña de ingreso a base de datos
			$contrasena = "root1234";
			// Nombre de la base de datos 
			$db = "skylabs";

			$mysqli = new mysqli($url,$usuario,$contrasena,$db);

		 	if (!$mysqli) {
			 	die("Error en conexion a base de datos ".$mysqli->connect_error);
			 }

			//eso es todo
			// esas son las formas de conectar a la base de datos

			//en cualquier otra clases u pagina la llamas
			//require_once("conect_db.php");
			//de hecho la puedes dejar como un metodo y lo llamas retornando la conexon;
?>
