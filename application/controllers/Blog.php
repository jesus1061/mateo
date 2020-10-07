<?php
session_start();
error_reporting(0);
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
	public function inicio()
	{
		

		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_publicacion');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function listar_blogs()
	{

		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('listar_blogs');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function listar_visitas(){
		$instancia = new Blog_model();
		$peticion_select = $instancia -> listar_visitas();	
		return $peticion_select;
	}

	public function listar_visitas_conteo(){
		$instancia = new Blog_model();
		$peticion_select = $instancia -> listar_visitas_conteo();	
		foreach($peticion_select as $conteo_visitas){
			echo '<script>
			alert("Tu sitio web a la fecha tiene '.$conteo_visitas['count(*)'].' Visitas");
			</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}


	public function crear_visita(){
		$instancia = new Blog_model();
		$peticion_insert = $instancia -> crear_visita();	
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
		
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('editar_blog');	
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
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
		echo '<script>
		alert("Publicación actualizada con exito");
		window.location.href = "listar_blogs";
		</script>';
	}


	public function eliminar_elemento(){
		extract($_POST);
		//print_r($_POST);
		$instancia = new Blog_model();
		$peticion_delete = $instancia ->eliminar_elemento($archivo_id);

		echo '<script>
		alert("Publicación editada con exito");
		window.location.href = "listar_blogs";
		</script>';
		

	}

	
}
