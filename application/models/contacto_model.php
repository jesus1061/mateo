<?php
include_once "conexion.php";
class Contacto_model{

	

	public function ver_contactos(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM contactos');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;	
	}


	


	


}
?>