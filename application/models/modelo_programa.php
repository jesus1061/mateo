<?php
include_once "conexion.php";
class Modelo_programa {

	
	

	public function crear_programa($titulo_programa , $contenido_programa , $portada_programa , $tipo_portada){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('INSERT INTO programas (titulo_programa, contenido_programa , portada_programa , tipo_portada ) VALUES 

			(:titulo ,  :contenido, :portada , :tipo_portada)');

		$sql->bindParam(':titulo', $titulo_programa);
		$sql->bindParam(':contenido', $contenido_programa);
		
		$sql->bindParam(':portada', $portada_programa);
		$sql->bindParam(':tipo_portada', $tipo_portada);
		$sql->execute();

	}


	public function consultar_programas(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM programas');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;
	}


	
	


	


	

	
}
?>