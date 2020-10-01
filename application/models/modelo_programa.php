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


	public function consultar_programa_unico($elemento){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM programas  WHERE programa_id = :id');
		$sql->bindParam(':id', $elemento);
		$sql->execute();
		$resultado = $sql->fetchAll();
		return $resultado;
	}


	public function editar_programa_datos($elemento , $titulo_programa , $contenido_programa , $portada_programa , $tipo_portada){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('UPDATE programas SET titulo_programa= :titulo_programa , contenido_programa = :contenido_programa , portada_programa = :portada_programa , tipo_portada = :tipo_portada WHERE programa_id = :id');


		$sql->bindParam(':id',$elemento);

		$sql->bindParam(':titulo_programa', $titulo_programa);


		$sql->bindParam(':contenido_programa',$contenido_programa);

		$sql->bindParam(':portada_programa',$portada_programa);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		$sql->execute();	

	}


	public function eliminar_elemento($archivo_id){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('DELETE FROM programas WHERE programa_id = :id');

		$sql->bindParam(':id', $archivo_id);
		$sql->execute();	
	}


	
	


	


	

	
}
?>