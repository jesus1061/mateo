<?php
include_once "conexion.php";
class Blog_model{

	public function crear_publicacion($titulo_pub , $contenido_pub , $autor_pub , $portada_pub , $tipo_portada){
		
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('INSERT INTO blog (titulo_pub , contenido_pub , autor_pub , fecha_pub , portada_pub , tipo_portada) VALUES 

			(:titulo, :contenido , :autor , now()  , :portada, :tipo_portada)');


		$sql->bindParam(':titulo', $titulo_pub);
		$sql->bindParam(':contenido', $contenido_pub);
		$sql->bindParam(':autor', $autor_pub);
		$sql->bindParam(':portada', $portada_pub);
		$sql->bindParam(':tipo_portada', $tipo_portada);
		
		
		
		$sql->execute();
		
	}


	public function consultar_publicaciones(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM blog');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;	
	}


	


}
?>