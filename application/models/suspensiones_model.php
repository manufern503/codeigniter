<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class suspensiones_model extends CI_Model
{
	
	public function get_suspensiones(){
		$this->db->select('id_suspensiones, s.fecha, e.cod_equipo, em.nombre_empleado,em.apellido, s.n_dias, s.motivo, s.observaciones');
		$this->db->from('suspensiones s');
		$this->db->join('equipo e','e.cod_equipo=s.cod_equipo');
		$this->db->join('empleado em','em.id_empleado=s.id_empleado');
		$exe = $this->db->get();
		return $exe->result();
	}

	public function get_equipo(){
		$exe = $this->db->get('equipo');
		return $exe->result();
	}

	public function get_empleado(){
		$exe = $this->db->get('empleado');
		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where('id_suspensiones', $id);
		return($this->db->delete('suspensiones'));
	}

	public function set_suspensiones($datos){
		$this->db->set('fecha',$datos["fecha"]);
		$this->db->set('cod_equipo',$datos["cod_equipo"]);
		$this->db->set('id_empleado',$datos["id_empleado"]);
		$this->db->set('n_dias',$datos["n_dias"]);
		$this->db->set('motivo',$datos["motivo"]);
		$this->db->set('observaciones',$datos["observaciones"]);
		$this->db->insert('suspensiones');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}

	public function get_datos($id){
		$this->db->where('id_suspensiones',$id);
		$exe = $this->db->get('suspensiones');
		return $exe->result();
	}

	public function actualizar($datos){
		$this->db->set('fecha',$datos["fecha"]);
		$this->db->set('cod_equipo',$datos["cod_equipo"]);
		$this->db->set('id_empleado',$datos["empleado"]);
		$this->db->set('n_dias',$datos["n_dias"]);
		$this->db->set('motivo',$datos["motivo"]);
		$this->db->set('observaciones',$datos["observaciones"]);
		$this->db->where('id_suspensiones',$datos["id"]);
		$this->db->update('suspensiones');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}
}

 ?>