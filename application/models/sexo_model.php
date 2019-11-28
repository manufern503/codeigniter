<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sexo_model extends CI_Model {

	public function get_nombre_sexo(){
		$this->db->select("s.nombre_sexo");
		$this->db->from("sexo s");


    $exe=$this->db->get();
    return $exe->result();


}
}

