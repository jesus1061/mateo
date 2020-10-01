<?php
include_once "application/models/blog_model.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$this->load->view('crear_publicacion');
	}

	public function listar_blogs()
	{
		$this->load->view('listar_blogs');
	}


	public function crear_blog(){
		//print_r($_POST);
		extract($_POST);
		$instancia = new Blog_model();
		$peticion_insert = $instancia -> crear_publicacion($titulo_pub , $contenido_pub , $autor_pub , $portada_pub , $tipo_portada);

		echo '<script>
		alert("Publicación creada con exito");
		window.location.href = "listar_blogs";
		</script>';
	}


	public function consultar_publicaciones(){
		$instancia = new Blog_model();
		$peticion_select = $instancia -> consultar_publicaciones();
		return $peticion_select;
	}


	public function editar_blog(){
		$this->load->view('editar_blog');	
	}

	public function listar_publicacion_unica_consulta($elemento){
		$instancia = new Blog_model();
		$peticion_select = $instancia -> consultar_publicacion_unica($elemento);
		return $peticion_select;	
	}

	public function editar_publicacion_datos(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Blog_model();
		$peticion_update = $instancia -> editar_publicacion_datos($blog_id , $titulo_pub , $contenido_pub , $autor_pub , $portada_pub , $tipo_portada);
	}

	
}
