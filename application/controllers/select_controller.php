<?php
include_once "Multimedia.php";
include_once "Banner.php";
include_once "Programas.php";
include_once "Talento.php";
include_once "Blog.php";
include_once "Galeria.php";
include_once "Contactos.php";

class Select_controller{



	public function crear_visita(){
		$instancia = new Blog();
		$peticion_insert = $instancia -> crear_visita();
		return $peticion_insert;	
	}

	public function consultar_visitas(){
		$instancia = new Blog();
		$peticion_select = $instancia -> listar_visitas();
		return $peticion_select;	
	}

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

	public function listar_albumnes(){

		$instancia = new Galeria();
		$peticion_select = $instancia ->listar_albumnes_datos();
		return $peticion_select;
	}
	public function listar_elementos_galeria(){

		$instancia = new Galeria();
		$peticion_select = $instancia ->listar_elementos_galeria_datos();
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

	public function listar_publicacion_unica($elemento){
		$instancia = new Blog();
		$peticion_select = $instancia -> listar_publicacion_unica_consulta($elemento);
		return $peticion_select;

	}
	public function listar_album_unico($elemento){
		$instancia = new Galeria();
		$peticion_select = $instancia -> listar_album_unico_consulta($elemento);
		return $peticion_select;

	}

	public function listar_elemento_galeria_unico($elemento){
		$instancia = new Galeria();
		$peticion_select = $instancia -> listar_elemento_galeria__unico_consulta($elemento);
		return $peticion_select;

	}

	public function listar_contactos(){
		$instancia = new Contactos();
		$peticion_select = $instancia ->listar_contactos();
		return $peticion_select;	
	}



}
?>