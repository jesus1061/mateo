<?php
session_start();
error_reporting(0);
include_once "application/models/personal_model.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Talento extends CI_Controller {

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
			$this->load->view('crear_talento');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function listar_talentos()
	{
		
		if (isset($_SESSION['usuario'])) 
		{
		$this->load->view('listar_talentos');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}


	public function crear_talento(){
		//print_r($_POST);
		extract($_POST);
		$instancia = new Personal_model();
		$peticion_insert = $instancia -> crear_personal($personal_nombre , $personal_cargo , $perfil_profesional , $portada_foto , $link_facebook , $link_instagram , $link_twitter , $tipo_portada);

		echo '<script>
		alert("Funcionario creado con exito");
		window.location.href = "listar_talentos";
		</script>';
	}


	public function consultar_personal(){
		$instancia = new Personal_model();
		$peticion_select = $instancia -> consultar_personal();
		return $peticion_select;

	}

	public function editar_personal(){
		
		if (isset($_SESSION['usuario'])) 
		{
		$this->load->view('editar_talento');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}

	}

	public function listar_personal_unico_consulta($elemento){
		$instancia = new Personal_model();
		$peticion_select = $instancia -> consultar_personal();
		$peticion_select = $instancia -> listar_personal_unico_consulta($elemento);
		return $peticion_select;
	}


	public function editar_talento_datos(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Personal_model();
		$peticion_select = $instancia -> editar_talento_datos($personal_id , $personal_nombre , $personal_cargo , $perfil_profesional , $portada_foto , $link_facebook , $link_instagram , $link_twitter , $tipo_portada);
		echo '<script>
		alert("Funcionario editado corractameente");
		window.location.href = "listar_talentos";
		</script>';
	}


	public function eliminar_talento(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Personal_model();
		$peticion_delete = $instancia -> eliminar_elemento($archivo_id);
		echo '<script>
		alert("Funcionario eliminado corractameente");
		window.location.href = "listar_talentos";
		</script>';

	}
	

	
}
