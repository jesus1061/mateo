<?php
include_once "conexion.php";
class Modelo_multimedia {

	/*Modelo para cargar imagenes internas*/
	public function subir_imagen_interna($nombre_archivo , $tipo_archivo , $archivo){
		$archivo_img = '<img src="../'.$archivo.'" class="img-archivo">';
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('INSERT INTO multimedia (nombre_archivo, tipo_archivo , archivo ) VALUES (:arg_nombre_archivo  ,  :tipo_archivo,  :arg_archivo_ruta)');
		$sql->bindParam(':arg_nombre_archivo', $nombre_archivo);
		$sql->bindParam(':tipo_archivo', $tipo_archivo);
		$sql->bindParam(':arg_archivo_ruta', $archivo_img);
		$sql->execute();
	}


	/*Modelo para cargar imagenes internas*/
	public function subir_imagen_externa($nombre_archivo , $tipo_archivo , $archivo){
		$archivo_img = '<img src="'.$archivo.'" class="img-archivo">';
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('INSERT INTO multimedia (nombre_archivo, tipo_archivo , archivo ) VALUES (:arg_nombre_archivo  ,  :tipo_archivo,  :arg_archivo_ruta)');
		$sql->bindParam(':arg_nombre_archivo', $nombre_archivo);
		$sql->bindParam(':tipo_archivo', $tipo_archivo);
		$sql->bindParam(':arg_archivo_ruta', $archivo_img);
		$sql->execute();
	}


	public function subir_video_externo($nombre_archivo , $tipo_archivo , $archivo){
		$archivo_img = '<iframe src="'.$archivo.'" class="img-archivo"></iframe>';
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('INSERT INTO multimedia (nombre_archivo, tipo_archivo , archivo ) VALUES (:arg_nombre_archivo  ,  :tipo_archivo,  :arg_archivo_ruta)');
		$sql->bindParam(':arg_nombre_archivo', $nombre_archivo);
		$sql->bindParam(':tipo_archivo', $tipo_archivo);
		$sql->bindParam(':arg_archivo_ruta', $archivo_img);
		$sql->execute();
	}


	/*Modelo para listar todos los archivos que se suben*/

	public function listar_archivos_multimedia(){
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM multimedia');
		$sql->execute();
		$resultado = $sql->fetchAll();

		return $resultado;

		
	}


	public function eliminar_archivo_multimedia($archivo_id){



		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();


		$sql2 = $pdo->prepare('SELECT * FROM multimedia  WHERE id_archivo = :id');
		$sql2->bindParam(':id', $archivo_id);
		$sql2->execute();
		$resultado = $sql2->fetchAll();
		foreach($resultado as $archivo){
			echo '<div class="archivo_seleccionado" style="display:none">';
			echo $archivo['archivo'];
			echo '<form action="eliminar_ruta_archivo" method="post">
			<input type="text" class="ruta" name="ruta_borrar">
			<input type="submit" class="btn-borrar-archivo">
			</form>';
			echo '</div>';

			echo "<script>
			var seleccion = $('.archivo_seleccionado .img-archivo').attr('src');
			$('.ruta').val(seleccion);
			$('.btn-borrar-archivo').click();
			</script>";
			

		}
		$sql = $pdo->prepare('DELETE FROM multimedia  WHERE id_archivo = :id');

		$sql->bindParam(':id', $archivo_id);
		
		$sql->execute();

	}


	

	
}
?>