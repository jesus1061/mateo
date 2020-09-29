<?php
include_once "application/models/banner_model.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

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
		$this->load->view('crear_banner.php');
	}

	/*Lanza la vista para observar banners*/
	public function listar_banners()
	{
		$this->load->view('listar_banners.php');
	}


	public function crear_banner(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Banner_model();
		$peticion_insert = $instancia -> crear_banner($banner_nombre , $banner_imagen , $tipo_banner);

		echo '<script>
		alert("Banner creado con exito");
		window.location.href = "listar_banners";
		</script>';
	}


	public function consultar_banners(){
		$instancia = new Banner_model();
		$peticion_select = $instancia -> consultar_banners();
		return $peticion_select;
	}

	
}

