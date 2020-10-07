<?php
session_start();
error_reporting(0);
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
	public function inicio()
	{
		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_banner.php');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	/*Lanza la vista para observar banners*/
	public function listar_banners()
	{
		

		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('listar_banners.php');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
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

	public function editar_banner(){
		$this->load->view('editar_banner');
	}


	public function editar_banner_datos(){
		//print_r($_POST);
		extract($_POST);
		$instancia = new Banner_model();
		$peticion_update = $instancia -> editar_banner_datos($banner_id , $banner_nombre , $banner_imagen , $tipo_banner);
		echo '<script>
		alert("Banner modificado con exito");
		window.location.href = "listar_banners";
		</script>';
	}

	public function consultar_banner_unico($elemento){
		$instancia = new Banner_model();
		$peticion_select = $instancia -> consultar_banner_unico($elemento);
		return $peticion_select;
	}

	public function eliminar_banner(){
		$instancia = new Banner_model();
		extract($_POST);
		//print_r($_POST);
		$peticion_delete = $instancia -> eliminar_elemento($archivo_id);
		echo '<script>
		alert("Banner eliminado con exito");
		window.location.href = "listar_banners";
		</script>';
	}

	
}

