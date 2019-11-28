<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class empleado_equipo_model extends CI_Model
{
	public function get_empleado_equipo(){
		$this->db->select('ee.id_empleado_equipo, e.nombre_empleado, e.apellido, eq.cod_equipo, h.hora_inicial, h.hora_final, h.dias, r.nombre_ruta');
		$this->db->from('empleado_equipo ee');
		$this->db->join('empleado e','e.id_empleado=ee.id_empleado');
		$this->db->join('equipo eq','eq.cod_equipo=ee.cod_equipo');
		$this->db->join('horario h','h.id_horario=ee.id_horario');
		$this->db->join('ruta r','r.id_ruta=ee.id_ruta');
		$exe = $this->db->get();
		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where('id_empleado_equipo',$id);
		return($this->db->delete('empleado_equipo'));
	}

	public function get_empleado(){
		$exe = $this->db->get('empleado');
		return $exe->result();
	}

	public function get_equipo(){
		$exe = $this->db->get('equipo');
		return $exe->result();
	}

	public function get_horario(){
		$exe = $this->db->get('horario');
		return $exe->result();
	}

	public function get_ruta(){
		$exe = $this->db->get('ruta');
		return $exe->result();
	}


	public function set_empleado_equipo($datos){
		$this->db->set('id_empleado', $datos["empleado"]);
		$this->db->set('cod_equipo', $datos["cod_equipo"]);
		$this->db->set('id_horario', $datos["horario"]);
		$this->db->set('id_ruta', $datos["ruta"]);
		$this->db->insert('empleado_equipo');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}

	public function get_datos($id){
		$this->db->where('id_empleado_equipo',$id);
		$exe = $this->db->get('empleado_equipo');
		return $exe->result();
	}

	public function actualizar($datos){
		$this->db->set('id_empleado', $datos['empleado']);
		$this->db->set('cod_equipo', $datos['cod_equipo']);
		$this->db->set('id_horario', $datos['horario']);
		$this->db->set('id_ruta', $datos['ruta']);
		$this->db->where('id_empleado_equipo',$datos['id']);
		$this->db->update('empleado_equipo');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
	
}
 ?>