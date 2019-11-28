<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class compania_controller extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("compania_model");
	}
	public function index(){
		$data = array(
			'title'   => 'compania', 
			'compania'  => $this->compania_model->get_compania());
		
		
		$this->load->view('template/header',$data);
		$this->load->view('compania_view');
		$this->load->view('template/footer');
	}
	public function eliminar($id){
		$this->compania_model->eliminar($id);
		redirect("compania_controller/index", "refresh");
	}
	public function ingresar(){
		$datos["nombre_compania"]=$_POST["nombre_compania"];
		$datos["direccion"]=$_POST["direccion"];

		$msj = $this->compania_model->ingresar($datos);
		if ($msj == "success"){
			$data = array(
				'nombre_compania'  => $this->compania_model->get_empleado(),
		     	  'msj' => "success");  

			$this->load->view('template/header',$data);
			$this->load->view('compania_view');
			$this->load->view('template/footer');
			
		}
	}

	public function get_datos($id){
		$data = array(
			'title'   => 'compania', 
			'compania'  => $this->compania_model->get_datos($id));
		
		
		$this->load->view('template/header',$data);
		$this->load->view('compania_viewAct');
		$this->load->view('template/footer');
	}
	public function actualizar(){
		$datos["id"]=$_POST["id"];
		$datos["nombre_compania"]=$_POST["nombre_compania"];
		$datos["direccion"]=$_POST["direccion"];
		$this->compania_model->actualizar($datos);

		$msj = $this->compania_model->ingresar($datos);
		if ($msj == "success"){
			$data = array(
				'title'   => ' || ', 
				'nombre_compania'  => $this->compania_model->get_empleado(),
			  'msj' => "success");  //Esto se agrega (no se encuentra en el index)

			$this->load->view('template/header',$data);
			$this->load->view('compania_view');
			$this->load->view('template/footer');



		}

	}
}
