<?php
session_start();
error_reporting(0);
include_once "application/models/contacto_model.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

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
			$this->load->view('ver_contactos.php');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function listar_contactos(){
		$instancia = new Contacto_model();
		$peticion_select = $instancia ->ver_contactos();
		return $peticion_select;
	}



	
}

