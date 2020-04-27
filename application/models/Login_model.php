<?php
class Login_model extends CI_Model{
 

	public function validate($usuario,$clave){

		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$clave);
		$this->db->where('estado',1);
		$result = $this->db->get('usuario',1);
		return $result;
	}
 
}