<?php
session_start();
error_reporting(0);
include_once "application/models/modelo_multimedia.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class Multimedia extends CI_Controller {

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
	public function imagen_interna()/*Laza la vista para subir imagen interna*/
	{


		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_imagen_interna');	
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
		
	}

	public function imagen_externa()/*Laza la vista para subir imagen externa*/
	{
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_imagen_externa');	
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}

	public function video_externo()/*Laza la vista para subir video externo*/
	{
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('crear_video_externo');	
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}
	}




	public function subir_imagen_interna(){/*Recibe información para subir una imagen interna*/
		
		$instancia = new Modelo_multimedia();
		
		extract($_POST);
		
		$dir_subida = 'plantilla_back/img/multimedia/';
		$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);
		$archivo = $dir_subida.$_FILES['archivo']['name'];

		if(move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)){
			

//*Crear registro dentro de la base de datos*//

			$peticion_insert = $instancia -> subir_imagen_interna($nombre_archivo , $tipo_archivo , $archivo);

			echo '<script>
			alert("Archivo subido con exito");
			window.location.href = "lanzar_vista_listar_archivos";
			</script>';



		} else{
			echo '<script>
			alert("Fallo la subida del archivo");
			</script>';	
		}

	}

	/*Lanza la vista de los archivos multimedia generales que stan cargados en la plataforma*/

	public function lanzar_vista_listar_archivos(){
		if (isset($_SESSION['usuario'])) 
		{
			$this->load->view('listar_archivos_multimedia');
			
			

		}else{

			echo '<script>alert("Su sesión termino");</script>';
			echo '<script>
			window.location.href = "../panel/inicio";
			</script>';
		}

		
	}


	/*  muestra Lista los archivos multimedia generales */


	public function listar_archivos_multimedia(){

		$instancia = new Modelo_multimedia();
		
		$peticion_select = $instancia -> listar_archivos_multimedia();
		return $peticion_select;

	}


	/* sube la ruta del archivo tipo imagen externa*/


	public function subir_imagen_externa(){
		$instancia = new Modelo_multimedia();
		
		extract($_POST);
		//print_r($_POST);
		$peticion_insert = $instancia -> subir_imagen_externa($nombre_archivo , $tipo_archivo , $archivo);
		echo '<script>
		alert("Archivo subido con exito");
		window.location.href = "lanzar_vista_listar_archivos";
		</script>';
	}

	/* sube la ruta del archivo tipo video externo*/

	public function subir_video_externo(){
		$instancia = new Modelo_multimedia();
		
		extract($_POST);
		//print_r($_POST);
		$peticion_insert = $instancia -> subir_video_externo($nombre_archivo , $tipo_archivo , $archivo);
		echo '<script>
		alert("Archivo subido con exito");
		window.location.href = "lanzar_vista_listar_archivos";
		</script>';
	}


	public function eliminar_archivo(){
		$instancia = new Modelo_multimedia();
		extract($_POST);
		//print_r($_POST);
		$peticion_deleta = $instancia -> eliminar_archivo_multimedia($archivo_id , $arg_ruta , $tipo_archivo_arg);
		
	}


	/*Modelo que elimina los registro de los archivos de la base de datos y elimina los archivos internios dentro del servidor*/
	public function eliminar_ruta_archivo (){
		extract($_POST);
		//print_r($_POST);
		$ruta_borrar;
		$borrar = substr($ruta_borrar, 3);
		$word = "http";



		if(strpos($borrar, $word) !== false){

			unlink($borrar);

			$instancia = new Modelo_multimedia();
			$peticion_delete = $instancia -> borrado_masivo($ruta_borrar);
			
			echo '<script>
			alert("El archivo fue eliminado correctamente del servidor");
			window.location.href = "lanzar_vista_listar_archivos";
			</script>';
		} else{
			//unlink($borrar);
			echo '<script>
			alert("El archivo fue eliminado correctamente del servidor");
			window.location.href = "lanzar_vista_listar_archivos";
			</script>';
			$instancia = new Modelo_multimedia();
			$peticion_delete = $instancia -> borrado_masivo($ruta_borrar);

		}
		

		



		





	}


	
}
