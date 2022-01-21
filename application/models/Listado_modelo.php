<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listado_modelo extends CI_Model{

	var $table = 'perfil';

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_perfiles(){
		
        $query = $this->db->get('perfil');
        $result = $query->result_array();
          
        return $result;
		
	}

	public function busca_perfil_id($id)
	{
	
		$query = $this->db->get_where('perfil', array('id_perfil' => $id));
		
    	return ($query->num_rows() > 0)  ? $query->result() : false;
          
		
	}

	public function borra_perfil_id($id)
	{
		$this->db->delete('perfil', array('id_perfil' => $id));
		
		return $this->db->affected_rows();
	}

	public function actualiza_perfil($data)
	{
		$sqlquery = 'UPDATE perfil SET codigo=?, per_nombre=? WHERE id_perfil=?';
        $this->db->query($sqlquery, array($data["identificador"],$data["descripcion"],$data["id"]));
        
        return $this->db->affected_rows();
	
	}

}