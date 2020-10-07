<?php
session_start();
error_reporting(0);
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
		

		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_album');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
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


		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('listar_albumnes');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}

	}


	public function listar_albumnes_datos(){
		$instancia = new Galeria_model();
		$peticion_select = $instancia -> listar_album_datos();
		return $peticion_select;

	}

	public function editar_album(){
		


		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('editar_album');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}


	}


	public function listar_album_unico_consulta($elemento){

		$instancia = new Galeria_model();
		$peticion_select = $instancia -> listar_album_unico_datos($elemento);
		return $peticion_select;	
	}

	public function editar_album_datos(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Galeria_model();
		$peticion_update = $instancia -> editar_album_unico_datos($album_id , $album_titulo , $album_portada_principal , $tipo_portada);
		
		echo '<script>
		alert("Album modificado correctamente");
		window.location.href = "listar_albumnes";
		</script>';

	}


	public function crear_elemento(){

		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_elemento_galeria');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}


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

		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('listar_elementos_galeria');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function listar_elementos_galeria_datos(){
		$instancia = new Galeria_model();
		$peticion_select = $instancia -> listar_elementos_galeria_datos();
		return $peticion_select;	

	}


	public function editar_elemento_galeria(){
		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('editar_elemento_galeria');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
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


	public function eliminar_elemento_galeria(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Galeria_model();
		$peticion_delete = $instancia -> eliminar_elemento_galeria($archivo_id);
		echo '<script>
		alert("Se ha eliminado este elemento");
		window.location.href = "ver_elementos_galeria";
		
		</script>';
		
		
	}

	public function eliminar_album(){
		extract($_POST);
		print_r($_POST);
		$instancia = new Galeria_model();
		/*Archivo id es el codigo del album primero se eliminaran los elementos que corresponden con ese id luego se eliminara el registro del album*/
		$peticion_delete_elementos = $instancia -> eliminar_elementos_album($archivo_id);
		echo '<script>
		alert("Se han eliminado los elementos de este album");
		
		</script>';

		$peticion_delete_album = $instancia -> eliminar_album($archivo_id);

		echo '<script>
		alert("Se han eliminado este album y todos sus registros");
		window.location.href = "ver_elementos_galeria";
		
		</script>';

	}

	




	

	
}
