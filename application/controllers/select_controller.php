<?php
include_once "Multimedia.php";
include_once "Banner.php";
include_once "Programas.php";

class Select_controller{

	public function listar_archivos(){
$instancia = new Multimedia();
$peticion_select = $instancia -> listar_archivos_multimedia();
return $peticion_select;

	}


	public function listar_banners(){
$instancia = new Banner();
$peticion_select = $instancia -> consultar_banners();
return $peticion_select;

	}


	public function listar_programas(){
$instancia = new Programas();
$peticion_select = $instancia -> consultar_programas();
return $peticion_select;

	}
}
?>