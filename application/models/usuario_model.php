<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {

	
	public function get_usuario(){
		$this->db->select('us.id_usuario, us.nombre, us.usuario, us.correo, r.nombre_rol');
		$this->db->from('usuario us');
		$this->db->join('rol r','r.id_rol= us.id_rol');
		$exe= $this->db->get();
		return $exe->result();
	}
	public function get_rol(){
		$exe = $this->db->get('rol');
		return $exe->result();
	
	}

	public function eliminar($id){
		$this->db->where('id_usuario',$id);
		return ($this->db->delete('usuario'));
	}

		public function set_usuario($datos){
		$this->db->set('nombre',$datos['nombre']);
		$this->db->set('usuario',$datos['usuario']);
		$this->db->set('correo',$datos['correo']);
		$this->db->set('id_rol',$datos['nombre_rol']);
		$this->db->insert('usuario');

	}
	public function get_datos($id){
		$this->db->where('id_usuario',$id);
			$this->db->select('us.id_usuario, us.nombre, us.usuario, us.correo, r.nombre_rol');
		$this->db->from('usuario us');
		$this->db->join('rol r','r.id_rol= us.id_rol');
		$exe= $this->db->get();
		return $exe->result();

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	public function actualizar($datos){
		$this->db->where('id_usuario',$datos['id']);
		$this->db->set('nombre',$datos['nombre']);
		$this->db->set('usuario',$datos['usuario']);
		$this->db->set('correo',$datos['correo']);
		$this->db->set('id_rol',$datos['nombre_rol']);
		$this->db->update('usuario');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
}