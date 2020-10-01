<?php
include_once "conexion.php";
class Banner_model{

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


	public function consultar_banners(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM banners');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;
	}


	public function consultar_banner_unico($elemento){

		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM banners  WHERE banner_id = :id');
		$sql->bindParam(':id', $elemento);
		$sql->execute();
		$resultado = $sql->fetchAll();
		return $resultado;

	}


	public function editar_banner_datos($banner_id ,$banner_nombre , $banner_imagen , $tipo_banner){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('UPDATE banners SET banner_nombre= :nombre_banner , banner_imagen= :banner , tipo_banner= :tipo_banner  WHERE banner_id = :id');


		$sql->bindParam(':id',$banner_id);

		$sql->bindParam(':nombre_banner', $banner_nombre);


		$sql->bindParam(':banner',$banner_imagen);
		$sql->bindParam(':tipo_banner',$tipo_banner);
		$sql->execute();
	}


	public function eliminar_elemento($archivo_id){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('DELETE FROM banners  WHERE banner_id = :id');

		$sql->bindParam(':id', $archivo_id);
		$sql->execute();


	}


}
?>