<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listado extends CI_Controller {	

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('listado_modelo');
	 	}

	public function index(){

		$data['listado'] = $this->listado_modelo->get_all_perfiles();

		$this->load->view('listado_vista',$data);

	}


	public function busca_perfil(){

		
		$response = $this->listado_modelo->busca_perfil_id($_POST['id']);
		
		header('Content-Type: application/json');
		echo json_encode($response);
		
	}



	public function borra_perfil(){

		$response = $this->listado_modelo->borra_perfil_id($_POST['id']);
		
		header('Content-Type: application/json');
		echo json_encode($response);		
		
	}

	public function actualiza_perfil(){

		$response = $this->listado_modelo->actualiza_perfil($_POST);
		
		header('Content-Type: application/json');
		echo json_encode($response);
	}



}
