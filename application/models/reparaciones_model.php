<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reparaciones_model extends CI_Model {

	
	public function get_reparaciones(){
		$this->db->select('r.id_reparaciones,r.costo,r.descripcion,r.fecha,ti.tipo_incidencias,r.cod_equipo');
		$this->db->from('reparaciones r');
		$this->db->join('tipo_incidencias ti','ti.id_tipo_incidencias=r.id_tipo_incidencias');
		$this->db->join('equipo e ','e.cod_equipo=r.cod_equipo');
		$exe= $this->db->get();
		return $exe->result();
	}
	public function get_tipo_incidencia(){
		$exe = $this->db->get('tipo_incidencias');
		return $exe->result();
	}
		public function get_codigo(){
		$exe = $this->db->get('equipo');
		return $exe->result();
	}


	public function eliminar($id){
		$this->db->where('id_reparaciones',$id);
		return ($this->db->delete('reparaciones'));
	}

	public function set_reparaciones($datos){
		$this->db->set('costo',$datos['costo']);
		$this->db->set('descripcion',$datos['descripcion']);
		$this->db->set('fecha',$datos['fecha']);
		$this->db->set('id_tipo_incidencias',$datos['tipo_incidencias']);
		$this->db->set('cod_equipo',$datos['cod_equipo']);
		$this->db->insert('reparaciones');

		if($this->db->affected_rows()> 0){
			return 'success';
		}

	}
	public function get_datos($id){
		$this->db->where('id_reparaciones',$id);
			$this->db->select('r.id_reparaciones,r.costo,r.descripcion,r.fecha,ti.tipo_incidencias,r.cod_equipo');
		$this->db->from('reparaciones r');
		$this->db->join('tipo_incidencias ti','ti.id_tipo_incidencias=r.id_tipo_incidencias');
		$this->db->join('equipo e ','e.cod_equipo=r.cod_equipo');
		$exe= $this->db->get();
		return $exe->result();
	}
	public function actualizar($datos){
		$this->db->where('id_reparaciones',$datos['id']);
		$this->db->set('id_reparaciones',$datos['id']);
		$this->db->set('costo',$datos['costo']);
		$this->db->set('descripcion',$datos['descripcion']);
		$this->db->set('fecha',$datos['fecha']);
		$this->db->set('id_tipo_incidencias',$datos['tipo_incidencias']);
		$this->db->set('cod_equipo',$datos['cod_equipo']);
		$this->db->update('reparaciones');

		if($this->db->affected_rows()> 0){
			return 'success';
		}
	}
}
