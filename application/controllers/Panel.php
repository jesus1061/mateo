<?php
session_start();

include_once "application/models/panel_model.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

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
	public function index()
	{
		$this->load->view('panel');

		if (isset($_SESSION['usuario'])) 
		{
			
		} else{

			echo '<script>alert("Su sesión ha caducado");</script>';
			echo '<script>
			window.location.href = "login";
			</script>';

		}
		


	}

	public function login(){

		if (isset($_SESSION['usuario'])) 
		{
			
			echo '<script>alert("Tiene una sesión activa");</script>';
			echo '<script>
			window.location.href = "index";
			</script>';

		} else{
			$this->load->view('login');
			

		}
		
	}

	public function validar_login(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Panel_model();
		$peticion_select = $instancia -> validar_ingreso($arg_usuario , $arg_clave);
		if($peticion_select == null){
			echo '<script>alert("Acceso denegado");</script>';
		} else{

			$_SESSION['usuario']  = $arg_usuario;

			echo '<script>alert("Bienvenido al sistema");</script>';
			echo '<script>
			window.location.href = "index";
			</script>';






		}
	}
}
