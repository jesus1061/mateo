<?php
session_start();
error_reporting(0);
include_once "application/models/modelo_programa.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Programas extends CI_Controller {

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
	public function inicio()
	{
		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_programa');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function listar_programas()
	{
		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('listar_programas');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}


	public function crear_programa(){
		//print_r($_POST);
		extract($_POST);
		$instancia = new modelo_programa();
		$peticion_insert = $instancia -> crear_programa($titulo_programa , $contenido_programa , $portada_programa , $tipo_portada);

		echo '<script>
		alert("Programa creado con exito");
		window.location.href = "listar_programas";
		</script>';

	}


	public function consultar_programas(){
		$instancia = new modelo_programa();
		$peticion_select = $instancia -> consultar_programas();
		return $peticion_select;
	}


	public function editar_programa(){
		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('editar_programa');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}

	}


	public function consultar_programa_unico($elemento){
		$instancia = new modelo_programa();
		$peticion_select = $instancia -> consultar_programa_unico($elemento);
		return $peticion_select;
	}


	public function editar_programa_datos(){
		//print_r($_POST);
		extract($_POST);
		$instancia = new modelo_programa();
		$peticion_select = $instancia -> editar_programa_datos($elemento , $titulo_programa , $contenido_programa , $portada_programa , $tipo_portada);
		echo '<script>
		alert("Programa editado con exito");
		window.location.href = "listar_programas";
		</script>';
	}


	public function eliminar_programa(){
		print_r($_POST);
		extract($_POST);
		$instancia = new modelo_programa();
		$peticion_delete = $instancia -> eliminar_elemento($archivo_id);
		echo '<script>
		alert("Programa eliminado con exito");
		window.location.href = "listar_programas";
		</script>';
	}
	
}
