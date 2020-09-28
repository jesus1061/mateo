<?php
class Conexion{


	public function obtener_conexion(){
		$dsn = 'mysql:dbname=mateo;charset=utf8;host=127.0.0.1;';
		$usuario = 'root';
		$contrasena = '';

		try {
			$gbd = new PDO($dsn, $usuario, $contrasena);
			return $gbd;

		} catch (PDOException $e) {
			echo 'Falló la conexión: ' . $e->getMessage();
		}
	}
	
}
?>