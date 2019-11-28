<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipo_model extends CI_Model {

	public function get_equipo(){
		$this->db->select('e.cod_equipo,t.tipo_bus,e.capacidad_parsonas,m.nombre_marca,e.placa,c.nombre_compania,es.nombre_estado');
		$this->db->from('equipo e');
		$this->db->join('tipo_bus t','t.id_tipo_bus=e.id_tipo_bus');
		$this->db->join('marca m','m.id_marca=e.id_marca');
		$this->db->join('compania c','c.id_compania=e.id_compania');
		$this->db->join('estado es','es.id_estado=e.id_estado');

		$exe=$this->db->get();
		return $exe->result();
	}

	public function get_tipo_bus(){
		$exe=$this->db->get('tipo_bus');
		return $exe->result();
	}

	public function get_marca(){
		$exe=$this->db->get('marca');
		return $exe->result();
	}

	public function get_compania(){
		$exe=$this->db->get('compania');
		return $exe->result();
	}

	public function get_estado(){
		$exe=$this->db->get('estado');
		return $exe->result();
	}

	public function set_equipo($datos){
		$this->db->set('cod_equipo',$datos['cod']);
		$this->db->set('id_tipo_bus',$datos['tipo']);
		$this->db->set('capacidad_parsonas',$datos['capacidad']);
		$this->db->set('id_marca',$datos['marca']);
		$this->db->set('placa',$datos['placa']);
		$this->db->set('id_compania',$datos['compa']);
		$this->db->set('id_estado',$datos['estado']);
		$this->db->insert('equipo');

		if($this->db->affected_rows() > 0){
			return 'success';
		}
	}

	public function eliminar($id){
		$this->db->where('cod_equipo',$id);
		return ($this->db->delete('equipo'));
	}

	public function get_datos($id){
		$this->db->where('cod_equipo',$id);
		$exe=$this->db->get('equipo');
		return $exe->result();
	}

	public function actualizar($datos){
		$this->db->set('cod_equipo',$datos['cod']);
		$this->db->set('id_tipo_bus',$datos['tipo']);
		$this->db->set('capacidad_parsonas',$datos['capacidad']);
		$this->db->set('id_marca',$datos['marca']);
		$this->db->set('placa',$datos['placa']);
		$this->db->set('id_compania',$datos['compa']);
		$this->db->set('id_estado',$datos['estado']);
		$this->db->where('cod_equipo',$datos['cod']);
		$this->db->update('equipo');

		if($this->db->affected_rows() > 0){
			return 'success';
		}
	}

}
