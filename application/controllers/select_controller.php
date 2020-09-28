<?php
include_once "Multimedia.php";

class Select_controller{

	public function listar_archivos(){
$instancia = new Multimedia();
$peticion_select = $instancia -> listar_archivos_multimedia();
return $peticion_select;

	}
}
?>