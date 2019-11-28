<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//La clase debe llamarse igual al archivo
//Usando Herencia, extendemos la clase CI_Controller
class alumnoModel extends CI_Model {

//Metodo que sirve para mostrar todos los alumnos
	public function get_alumno(){		
		//La linea comentareada de abajo SOLO SIRVE para cuando necesitemos los datos de una tabla
		//$alumno = $this->db->get('alumno');

		//Forma de como traer los datos de varias tablas
		$this->db->select('a.id_alumno, a.nombre, a.apellido, a.edad, a.correo, s.nombre_sexo, c.nombre_carrera, ci.nombre_ciudad, a.fnacimiento');
		$this->db->from('alumno a');
		$this->db->join('sexo s','s.id_sexo = a.id_sexo');
		$this->db->join('carrera c','c.id_carrera = a.id_carrera');
		$this->db->join('ciudad ci','ci.id_ciudad = a.id_ciudad');
		//get sirve para obtener datos, en este caso se obtendran los datos de la consulta anterior
		$exe = $this->db->get();
		//Retornamos los resultados guardados en la variable $exe
		return $exe->result();
	}

	//Metodo que sirve para mostrar todos los sexos
	public function get_sexo(){		
		$exe = $this->db->get('sexo');
		//Retornamos los resultados guardados en la variable $exe
		return $exe->result();
	}

	//Metodo que sirve para mostrar todas las carreras
	public function get_carrera(){		
		$exe = $this->db->get('carrera');
		//Retornamos los resultados guardados en la variable $exe
		return $exe->result();
	}

	//Metodo que sirve para mostrar todas las ciudades
	public function get_ciudad(){		
		$exe = $this->db->get('ciudad');
		//Retornamos los resultados guardados en la variable $exe
		return $exe->result();
	}

	public function set_alumno($datos){
		//setemos los campos de la tabla e indicamos el valor que se guardara en esa posicion
		$this->db->set('nombre',      $datos['nombre']);
		$this->db->set('apellido',    $datos['apellido']);
		$this->db->set('edad',        $datos['edad']);
		$this->db->set('correo',      $datos['correo']);
		$this->db->set('id_carrera',  $datos['carrera']);
		$this->db->set('id_sexo',     $datos['sexo']);
		$this->db->set('id_ciudad',   $datos['ciudad']);
		$this->db->set('fnacimiento', $datos['fnacimiento']);
		//indicamos el tipo de accion que vamos a realizar y a que tabla se realizara
		$this->db->insert('alumno');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
		
	}

	public function eliminar($id){
		//condicionamos con where el borrado de registros, indicando el campo y valor
		$this->db->where('id_alumno',$id);
		//indicamos el tipo de accion que vamos a realizar y a que tabla se realizara
		return ($this->db->delete('alumno'));
	}

	public function get_datos($id){
		//condicionamos con where la obtencion de los datos del registros, indicando el campo y valor
		$this->db->where('id_alumno',$id);
		//indicamos el tipo de accion que vamos a realizar y a que tabla se realizara
		$exe = $this->db->get('alumno');
		return $exe->result();
	}

	public function actualizar($datos){
		//setemos los campos de la tabla e indicamos el valor que se guardara en esa posicion
		$this->db->set('nombre',      $datos['nombre']);
		$this->db->set('apellido',    $datos['apellido']);
		$this->db->set('edad',        $datos['edad']);
		$this->db->set('correo',      $datos['correo']);
		$this->db->set('id_carrera',  $datos['carrera']);
		$this->db->set('id_sexo',     $datos['sexo']);
		$this->db->set('id_ciudad',   $datos['ciudad']);
		$this->db->set('fnacimiento', $datos['fnacimiento']);
		$this->db->where('id_alumno', $datos['id_alumno']);
		//indicamos el tipo de accion que vamos a realizar y a que tabla se realizara
		$this->db->update('alumno');

		if ($this->db->affected_rows() > 0) {
			return 'success';
		}
	}

}

?>