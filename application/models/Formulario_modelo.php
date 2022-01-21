<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_modelo extends CI_Model{

	var $table = 'perfil';

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registra_perfil($data){
		
		$sqlquery = 'INSERT INTO perfil (codigo, per_nombre) VALUES(?,?)';
        $this->db->query($sqlquery,array($data["identificador"],$data["description"]));
        
        return $this->db->affected_rows();
		
	}

}