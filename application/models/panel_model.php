<?php
include_once "conexion.php";
class Panel_model{

	


	public function validar_ingreso($arg_usuario , $arg_clave){

		
		$instancia_conexion = new Conexion();
		$pdo = $instancia_conexion -> obtener_conexion();
		$sql = $pdo->prepare('SELECT * FROM usuarios_administradores where usuario = :usuario AND clave = :clave ');
		$sql->bindParam(':usuario', $arg_usuario);
		$sql->bindParam(':clave', $arg_clave);
		$sql->execute();

		$resultado = $sql->fetchAll();

		return $resultado;	
	}


}
?>