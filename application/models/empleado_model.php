<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleado_model extends CI_Model {

	public function get_empleado(){
		$this->db->select("e.id_empleado, e.nombre_empleado, e.apellido, e.edad, s.nombre_sexo, e.f_nacimiento, e.dui, e.nit, e.licencia, c.nombre_cargo, em.nombre_estadoe");
		$this->db->from("empleado e");
		$this->db->join("sexo s", "s.id_sexo = e.id_sexo");
		$this->db->join("cargo c", "c.id_cargo = e.id_cargo");
		$this->db->join(" estado_empleado em", " em.id_estado_empleado = e.id_estado_empleado");

		$exe=$this->db->get();
		return $exe->result();
	}
	public function eliminar($id){
		$this->db->where("id_empleado",$id);
		return ($this->db->delete("empleado"));

	}
	public function ingresar($datos){
		$this->db->set("nombre_empleado", $datos["nombre_empleado"]);
		$this->db->set("apellido", $datos["apellido"]);
		$this->db->set("edad", $datos["edad"]);
		$this->db->set("id_sexo", $datos["nombre_sexo"]);
		$this->db->set("f_nacimiento", $datos["f_nacimiento"]);
		$this->db->set("dui", $datos["dui"]);
		$this->db->set("nit", $datos["nit"]);
		$this->db->set("licencia", $datos["licencia"]);
		$this->db->set("id_cargo", $datos["nombre_cargo"]);
		$this->db->set("id_estado_empleado", $datos["nombre_estadoe"]);
		$this->db->insert("empleado");

		if($this->db->affected_rows()>0){
			return "success";
		}

	}
	public function get_nombre_sexo(){
        $exe=$this->db->get("sexo");
		return $exe->result();

	}
	public function get_nombre_cargo(){
        $exe=$this->db->get("cargo");
		return $exe->result();

	}
	public function get_nombre_estadoe(){
        $exe=$this->db->get("estado_empleado");
		return $exe->result();

	}
	public function get_datos($id){
    	$this->db->where('id_empleado',$id);
    	$exe=$this->db->get('empleado');
    	return $exe->result();
    }

  public function actualizar($datos){
		$this->db->set("nombre_empleado", $datos["nombre_empleado"]);
		$this->db->set("apellido", $datos["apellido"]);
		$this->db->set("edad", $datos["edad"]);
		$this->db->set("id_sexo", $datos["nombre_sexo"]);
		$this->db->set("f_nacimiento", $datos["f_nacimiento"]);
		$this->db->set("dui", $datos["dui"]);
		$this->db->set("nit", $datos["nit"]);
		$this->db->set("licencia", $datos["licencia"]);
		$this->db->set("id_cargo", $datos["nombre_cargo"]);
		$this->db->set("id_estado_empleado", $datos["nombre_estadoe"]);
		$this->db->where("id_empleado", $datos["id"]);
		$this->db->UPDATE("empleado");
	}




}
