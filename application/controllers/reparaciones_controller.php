<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class reparaciones_controller extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('reparaciones_model');
	}

	
	public function index(){
	 $data = array(
			'costo'  => $this->reparaciones_model->get_reparaciones(),
			'tipo_incidencias'    => $this->reparaciones_model->get_tipo_incidencia(),
			'cod_equipo' => $this->reparaciones_model->get_codigo());

		$this->load->view('template/header',$data);
		$this->load->view('reparaciones_view');
		$this->load->view('template/footer');

	}
	public function eliminar($id){
		$this->reparaciones_model->eliminar($id);
		redirect('reparaciones_controller/index','refresh');
	}

	public function guardar(){
		$datos['costo'] = $_POST['costo'];
		$datos['descripcion'] = $_POST['descripcion'];
		$datos['fecha'] = $_POST['fecha'];
		$datos['tipo_incidencias'] = $_POST['tipo_incidencias'];
		$datos['cod_equipo'] = $_POST['cod_equipo'];
		$result = $this->reparaciones_model->set_reparaciones($datos);
		if ($result == "success") {
			$data = array(
				'title'   => 'Autobeses || Reparaciones', 
				'costo'  => $this->reparaciones_model->get_reparaciones(),
				'tipo_incidencias'    => $this->reparaciones_model->get_tipo_incidencia(),
				'cod_equipo' => $this->reparaciones_model->get_codigo(),
				'msj'     => "success");
		//Cargamos la vista y le pasamos el arreglo (en este caso llamado $data)
			$this->load->view('template/header',$data);
			$this->load->view('reparaciones_view');
			$this->load->view('template/footer');

		}
	}
	public function get_datos($id){
		$data = array(
				'title'   => 'Autobeses || Actualizar reparaciones', 
				'costo'  => $this->reparaciones_model->get_datos($id),
				'tipo_incidencias'    => $this->reparaciones_model->get_tipo_incidencia(),
				'cod_equipo' => $this->reparaciones_model->get_codigo());
				
			$this->load->view('template/header',$data);
			$this->load->view('reparaciones_viewact');
			$this->load->view('template/footer');
	}
	public function actualizar(){
		$datos['id'] = $_POST['id'];
		$datos['costo'] = $_POST['costo'];
		$datos['descripcion'] = $_POST['descripcion'];
		$datos['fecha'] = $_POST['fecha'];
		$datos['tipo_incidencias'] = $_POST['tipo_incidencias'];
		$datos['cod_equipo'] = $_POST['cod_equipo'];
		$result = $this->reparaciones_model->actualizar($datos);
			if($result == "success") {
			$data = array(
				'title'   => 'Autobeses || Actualizar', 
			'costo'  => $this->reparaciones_model->get_reparaciones(),
			'tipo_incidencias'    => $this->reparaciones_model->get_tipo_incidencia(),
			'cod_equipo' => $this->reparaciones_model->get_codigo(),
			'msj'     => "modi");
		}else{
			$data = array(
			'title'   => 'Autobeses || Actualizar', 
			'costo'  => $this->reparaciones_model->get_reparaciones(),
			'tipo_incidencias'    => $this->reparaciones_model->get_tipo_incidencia(),
			'cod_equipo' => $this->reparaciones_model->get_codigo(),
				'msj'     => "ErrorM");

		}

			$this->load->view('template/header',$data);
			$this->load->view('reparaciones_view');
			$this->load->view('template/footer');
	}
}
