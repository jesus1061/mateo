<?php
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
	public function imagen_interna()
	{
		$this->load->view('crear_imagen_interna');
	}

	public function imagen_externa()
	{
		$this->load->view('crear_imagen_externa');
	}

	public function video_externo()
	{
		$this->load->view('crear_video_externo');
	}
}
