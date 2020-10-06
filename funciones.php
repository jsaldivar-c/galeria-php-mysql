<?php
	# Funcion para conectarnos a la base de datos.
	# Return: la conexion o false si hubo un problema.
	function conexion($tabla, $usuario, $pass) {
		try {
			$conexion = new PDO("mysql:host=localhost:3306;dbname=$tabla", $usuario, $pass);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $conexion;

		} catch (PDOException $e) {
			return false;
		}
	}

	# Funcion para limpiar y convertir datos como espacios en blanco, barras y caracteres especiales en entidades HTML.
	# Return: los datos limpios y convertidos en entidades HTML.
	function limpiarDatos($datos) {
		
		$datos = trim($datos);
		$datos = stripslashes($datos);
		$datos = htmlspecialchars($datos);

		return $datos;
	}
?>