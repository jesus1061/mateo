<?php
include_once "conexion.php";
class Personal_model{

	public function crear_banner($banner_nombre , $banner_imagen , $tipo_banner){
		
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$banner_nombre."<br>".$banner_imagen;
		$sql = $pdo->prepare('INSERT INTO banners (banner_nombre, banner_imagen , tipo_banner) VALUES (:banner_nombre  ,  :banner_imagen , :tipo_banner)');
		$sql->bindParam(':banner_nombre', $banner_nombre);
		$sql->bindParam(':banner_imagen', $banner_imagen);
		$sql->bindParam(':tipo_banner', $tipo_banner);
		
		$sql->execute();
	}


	public function crear_personal($personal_nombre , $personal_cargo , $perfil_profesional , $portada_foto , $link_facebook , $link_instagram , $link_twitter , $tipo_portada){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('INSERT INTO personal (personal_nombre, personal_cargo ,perfil_profesional , personal_foto , link_facebook , link_instagram , link_twitter , tipo_portada ) VALUES 

			(:talento , :cargo ,  :perfil, :foto , :facebook , :instagram , :twitter , :portada)');

		$sql->bindParam(':talento', $personal_nombre);
		$sql->bindParam(':cargo', $personal_cargo);
		$sql->bindParam(':perfil', $perfil_profesional);
		
		$sql->bindParam(':foto', $portada_foto);
		$sql->bindParam(':facebook', $link_facebook);
		$sql->bindParam(':instagram', $link_instagram);
		$sql->bindParam(':twitter', $link_twitter);
		$sql->bindParam(':portada', $tipo_portada);
		$sql->execute();
		
	}


	public function consultar_personal(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM personal');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;

	}


	public function listar_personal_unico_consulta($elemento){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM personal  WHERE personal_id = :id');
		$sql->bindParam(':id', $elemento);
		$sql->execute();
		$resultado = $sql->fetchAll();
		return $resultado;

	}

	public function editar_talento_datos($personal_id , $personal_nombre , $personal_cargo , $perfil_profesional , $portada_foto , $link_facebook , $link_instagram , $link_twitter , $tipo_portada){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('UPDATE personal SET personal_nombre= :personal_nombre , personal_cargo= :personal_cargo ,  perfil_profesional = :perfil_profesional , personal_foto = :personal_foto ,  link_facebook = :link_facebook , link_instagram = :link_instagram , link_twitter = :link_twitter , tipo_portada= :tipo_portada   WHERE personal_id = :id');


		$sql->bindParam(':id',$personal_id);

		$sql->bindParam(':personal_nombre', $personal_nombre);
		$sql->bindParam(':personal_cargo', $personal_cargo);


		$sql->bindParam(':perfil_profesional',$perfil_profesional);
		$sql->bindParam(':personal_foto',$portada_foto);

		$sql->bindParam(':link_facebook',$link_facebook);
		$sql->bindParam(':link_instagram',$link_instagram);
		$sql->bindParam(':link_twitter',$link_twitter);
		$sql->bindParam(':tipo_portada',$tipo_portada);
		$sql->execute();

	}


	public function eliminar_elemento($archivo_id){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();

		$sql = $pdo->prepare('DELETE FROM personal  WHERE personal_id = :id');

		$sql->bindParam(':id', $archivo_id);
		
		$sql->execute();

	}


}
?>