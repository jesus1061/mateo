<?php
include_once "Multimedia.php";
include_once "Banner.php";
include_once "Programas.php";
include_once "Talento.php";
include_once "Blog.php";

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


	public function listar_personal(){
		$instancia = new Talento();
		$peticion_select = $instancia -> consultar_personal();
		return $peticion_select;	
	}


	public function listar_publicaciones(){
		$instancia = new Blog();
		$peticion_select = $instancia -> consultar_publicaciones();
		return $peticion_select;	
	}

	public function consultar_banner_unico($elemento){
		$instancia = new Banner();
		$peticion_select = $instancia -> consultar_banner_unico($elemento);
		return $peticion_select;

	}


	public function consultar_programa_unico($elemento){
		$instancia = new Programas();
		$peticion_select = $instancia -> consultar_programa_unico($elemento);
		return $peticion_select;

	}

	public function listar_personal_unico($elemento){
		$instancia = new Talento();
		$peticion_select = $instancia -> listar_personal_unico_consulta($elemento);
		return $peticion_select;

	}
}
?>