<?php
include_once "application/models/galeria_model.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function crear_album()/*Laza la vista para subir imagen interna*/
	{
		$this->load->view('crear_album');
	}

	public function crear_album_registro(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Galeria_model();
		$peticion_insert = $instancia -> crear_album($album_titulo , $album_portada_principal , $tipo_portada);
		echo '<script>
		alert("Album creado con exito");
		window.location.href = "listar_albumnes";
		</script>';
	}


	public function listar_albumnes(){
		$this->load->view('listar_albumnes');

	}


	public function listar_albumnes_datos(){
		$instancia = new Galeria_model();
		$peticion_select = $instancia -> listar_album_datos();
		return $peticion_select;

	}

	public function editar_album(){
		$this->load->view('editar_album');

	}


	public function listar_album_unico_consulta($elemento){

		$instancia = new Galeria_model();
		$peticion_select = $instancia -> listar_album_unico_datos($elemento);
		return $peticion_select;	
	}

	public function editar_album_datos(){
		extract($_POST);
		print_r($_POST);
		$instancia = new Galeria_model();
		$peticion_update = $instancia -> editar_album_unico_datos($album_id , $album_titulo , $album_portada_principal , $tipo_portada);
		return $peticion_update;

	}


	public function crear_elemento(){
		$this->load->view('crear_elemento_galeria');

	}


	public function guardar_elemento(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Galeria_model();
		$peticion_insert = $instancia -> guardar_elemento_galeria($contenido_galeria_nombre , $album_id , $contenido_galeria_foto , $tipo_portada);
		echo '<script>
		alert("Elemento de galeria creado correctamente");
		window.location.href = "ver_elementos_galeria";
		</script>';

	}

	public function ver_elementos_galeria(){

		$this->load->view('listar_elementos_galeria');
	}

	public function listar_elementos_galeria_datos(){
		$instancia = new Galeria_model();
		$peticion_select = $instancia -> listar_elementos_galeria_datos();
		return $peticion_select;	

	}


	public function editar_elemento_galeria(){
		$this->load->view('editar_elemento_galeria');
	}

	public function listar_elemento_galeria__unico_consulta($elemento){
		$instancia = new Galeria_model();
		$peticion_update = $instancia -> listar_elemento_galeria_unico_datos($elemento);
		return $peticion_update;

	}


	public function editar_elemento_galeria_unico(){
		$instancia = new Galeria_model();
		extract($_POST);
		//print_r($_POST);
		$peticion_update = $instancia -> editar_elemento_galeria_unico_datos($contenido_galeria_id , $contenido_galeria_nombre , $album_id , $contenido_galeria_foto , $tipo_portada);
		echo '<script>
		alert("Elemento de galeria modificado correctamente");
		window.location.href = "ver_elementos_galeria";
		</script>';
	}

	




	

	
}
