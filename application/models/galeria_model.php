<?php
include_once "conexion.php";
class Galeria_model{

	public function crear_album($album_titulo , $album_portada_principal , $tipo_portada){
		
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('INSERT INTO albumnes (album_titulo, album_portada_principal , tipo_portada) VALUES 

			(:titulo ,  :portada , :tipo_portada)');

		$sql->bindParam(':titulo', $album_titulo);
		
		
		$sql->bindParam(':portada',$album_portada_principal);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		$sql->execute();
	}


	public function listar_album_datos(){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM albumnes  contenido_galeria');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;
	}


	public function listar_album_unico_datos($elemento){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM albumnes WHERE album_id = :id');
		$sql->bindParam(':id', $elemento);
		$sql->execute();
		$resultado = $sql->fetchAll();
		return $resultado;
		
	}

	public function editar_album_unico_datos($album_id , $album_titulo , $album_portada_principal , $tipo_portada){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('UPDATE albumnes SET album_titulo= :album_titulo , album_portada_principal= :album_portada_principal , tipo_portada= :tipo_portada WHERE album_id = :id');


		$sql->bindParam(':id',$album_id);

		$sql->bindParam(':album_titulo', $album_titulo);


		$sql->bindParam(':album_portada_principal',$album_portada_principal);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		$sql->execute();

	}


	public function guardar_elemento_galeria($contenido_galeria_nombre , $album_id , $contenido_galeria_foto , $tipo_portada){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();


		$sql = $pdo->prepare('INSERT INTO contenido_galeria (contenido_galeria_nombre, album_id , contenido_galeria_foto , tipo_portada) VALUES 

			(:nombre_elemento,  :album , :elemento , :tipo_portada)');

		
		
		
		$sql->bindParam(':nombre_elemento',$contenido_galeria_nombre);
		$sql->bindParam(':album',$album_id);
		$sql->bindParam(':elemento',$contenido_galeria_foto);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		$sql->execute();
	}


	public function listar_elementos_galeria_datos(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM contenido_galeria');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;
	}

	public function listar_elemento_galeria_unico_datos($elemento){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM contenido_galeria  WHERE contenido_galeria_id = :id');
		$sql->bindParam(':id', $elemento);
		$sql->execute();
		$resultado = $sql->fetchAll();
		return $resultado;
	}


	public function editar_elemento_galeria_unico_datos($contenido_galeria_id , $contenido_galeria_nombre , $album_id , $contenido_galeria_foto , $tipo_portada){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('UPDATE contenido_galeria SET contenido_galeria_nombre= :contenido_galeria_nombre , album_id= :album_id , contenido_galeria_foto = :contenido_galeria_foto , tipo_portada = :tipo_portada WHERE contenido_galeria_id = :id');


		$sql->bindParam(':id',$contenido_galeria_id);

		$sql->bindParam(':contenido_galeria_nombre', $contenido_galeria_nombre);


		$sql->bindParam(':album_id',$album_id);
		$sql->bindParam(':contenido_galeria_foto',$contenido_galeria_foto);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		echo $sql->execute();

	}


	public function eliminar_elemento_galeria($archivo_id){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('DELETE FROM contenido_galeria  WHERE contenido_galeria_id = :id');

		$sql->bindParam(':id', $archivo_id);
		$sql->execute();
		

	}


	public function  eliminar_elementos_album($archivo_id){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('DELETE FROM contenido_galeria  WHERE album_id = :id');

		$sql->bindParam(':id', $archivo_id);
		$sql->execute();


	}

	public function eliminar_album($archivo_id){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('DELETE FROM albumnes  WHERE album_id = :id');

		$sql->bindParam(':id', $archivo_id);
		$sql->execute();
	}


	


	


}
?>