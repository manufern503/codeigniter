<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class compania_model extends CI_Model {

	public function get_compania(){
		$this->db->select("c.id_compania, c.nombre_compania, c.direccion");
		$this->db->from("compania c");

		$exe=$this->db->get();
		return $exe->result();
	}
	public function eliminar($id){
		$this->db->where("id_compania",$id);
		return ($this->db->delete("compania"));
   }
   public function ingresar($datos){
   	   $this->db->set("nombre_compania", $datos["nombre_compania"]);
   	   	$this->db->set("direccion", $datos["direccion"]);
   	   	$this->db->insert("compania");

   }
   public function get_datos($id){
		$this->db->where("id_compania",$id);
        $exe=$this->db->get("compania");
		return $exe->result();
  }

  public function actualizar($datos){
        $this->db->set("nombre_compania", $datos["nombre_compania"]);
   	   	$this->db->set("direccion", $datos["direccion"]);
   	   	$this->db->where("id_compania", $datos["id"]);
   	   	$this->db->update("compania");

  }
}
