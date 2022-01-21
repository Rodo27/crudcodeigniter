<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Formulario extends CI_Controller {	

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('formulario_modelo');
	 	}

	public function index(){

		$this->load->view('formulario_vista');
	}

	public function registra_perfil(){
		
		$response = $this->formulario_modelo->registra_perfil($_POST);
		$data = ($response > 0) ? true : false;  

		header('Content-Type: application/json');
		echo json_encode($data); 
	}
	
}
