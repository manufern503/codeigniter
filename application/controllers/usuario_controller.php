<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_controller extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('usuario_model');
	}

	
	public function index()
	{
		$data= array(
		'nombre' 		=> $this->usuario_model->get_usuario(),
		'nombre_rol'	=> $this->usuario_model->get_rol());
		
		$this->load->view('template/header',$data);
		$this->load->view('usuario_view');
		$this->load->view('template/footer');
	}
	public function eliminar($id){
		$this->usuario_model->eliminar($id);
		redirect('/usuario_controller/index','refresh');
	}

	public function guardar(){
		$datos['nombre'] = $_POST['nombre'];
		$datos['usuario'] = $_POST['usuario'];
		$datos['correo'] = $_POST['correo'];
		$datos['nombre_rol'] = $_POST['nombre_rol'];
		$result = $this->usuario_model->set_usuario($datos);
		if($result == "success") {
			$data = array(
			'title' => 'Autobuses || Usuarios',
			'nombre' => $this->usuario_model->get_usuario(),
			'nombre_rol' => $this->usuario_model->get_rol(),
			'msj' => "success");

		$this->load->view('template/header',$data);
		$this->load->view('usuario_view');
		$this->load->view('template/footer');
		}
		redirect('/usuario_controller/index','refresh');
	}
	public function get_datos($id){
	 $data= array(
	 	'title' => 'Autobuses|| actualizar',
	  'nombre'  => $this->usuario_model->get_datos($id),
	'nombre_rol' => $this->usuario_model->get_rol());

		 $this->load->view('template/header',$data);
		$this->load->view('usuario_viewact');
		$this->load->view('template/footer');

	}
	public function actualizar(){
		$datos['id'] = $_POST['id'];
		$datos['nombre'] = $_POST['nombre'];
		$datos['usuario'] = $_POST['usuario'];
		$datos['correo'] = $_POST['correo'];
		$datos['nombre_rol'] = $_POST['nombre_rol'];
		$result = $this->usuario_model->actualizar($datos);
		if($result == "success"){
			$data = array(
				'title' 		=> 'Autobeses || Actualizar', 
				'nombre' 		=>  $this->usuario_model->get_usuario(),
				'nombre_rol' 	=> $this->usuario_model->get_rol(),
				'msj'    		 => "modi");
		}else{
			$data = array(
				'title'	 		=> 'Autobeses || Actualizar',
				'nombre' 		=>  $this->usuario_model->get_usuario(),
				'nombre_rol' 	=> $this->usuario_model->get_rol(),
				'msj'    		 => "ErrorM");
		}
		 $this->load->view('template/header',$data);
		$this->load->view('usuario_view');
		$this->load->view('template/footer');
		
	}
}
