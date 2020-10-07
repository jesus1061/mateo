<?php
include_once "conexion.php";
class Blog_model{

	public function crear_visita(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('INSERT INTO visitas (visita_fecha) VALUES 

			(now())');

		$sql->execute();


		

	}


	public function listar_visitas(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT count(*) FROM visitas');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;	
	}

	public function listar_visitas_conteo(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT count(*) FROM visitas');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;	
	}


	public function crear_contacto($arg_nombre , $arg_apellido , $arg_correo , $arg_mensaje , $arg_telefono){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$nombre_completo = $arg_nombre." ".$arg_apellido;

		$sql = $pdo->prepare('INSERT INTO contactos (nombre_completo, correo, mensaje , telefono) VALUES 

			(:nombre_completo, :correo , :mensaje , :telefono)');


		$sql->bindParam(':nombre_completo', $nombre_completo);
		$sql->bindParam(':correo', $arg_correo);
		$sql->bindParam(':mensaje', $arg_mensaje);
		$sql->bindParam(':telefono', $arg_telefono);
					
		$sql->execute();	
	}

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


	public function consultar_publicacion_unica($elemento){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM blog  WHERE blog_id = :id');
		$sql->bindParam(':id', $elemento);
		$sql->execute();
		$resultado = $sql->fetchAll();
		return $resultado;
	}


	public function editar_publicacion_datos($blog_id , $titulo_pub , $contenido_pub , $autor_pub , $portada_pub , $tipo_portada){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('UPDATE blog SET titulo_pub= :titulo_pub , contenido_pub = :contenido_pub ,  autor_pub= :autor_pub , fecha_pub = now() , portada_pub = :portada_pub , tipo_portada = :tipo_portada WHERE blog_id = :id');


		$sql->bindParam(':id',$blog_id);

		$sql->bindParam(':titulo_pub', $titulo_pub);


		$sql->bindParam(':contenido_pub',$contenido_pub);
		$sql->bindParam(':autor_pub',$autor_pub);
		$sql->bindParam(':portada_pub',$portada_pub);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		$sql->execute();	

	}


	public function eliminar_elemento($archivo_id){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('DELETE FROM blog  WHERE blog_id = :id');

		$sql->bindParam(':id', $archivo_id);
		$sql->execute();

	}


	


}
?>