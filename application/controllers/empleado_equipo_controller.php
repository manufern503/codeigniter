<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class empleado_equipo_controller extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('empleado_equipo_model');
	}

	public function index(){
		$data = array(
			'title' =>'Autobuses || Empleado equipo' ,
			'empleado_equipo' => $this->empleado_equipo_model->get_empleado_equipo(),
			'empleado' => $this->empleado_equipo_model->get_empleado(),
			'equipo' => $this->empleado_equipo_model->get_equipo(),
			'horario' => $this->empleado_equipo_model->get_horario(),
			'ruta' => $this->empleado_equipo_model->get_ruta());
		$this->load->view('template/header',$data);
		$this->load->view('empleado_equipo_view');
		$this->load->view('template/footer');
	}

	public function eliminar($id){
		$this->empleado_equipo_model->eliminar($id);
		redirect('empleado_equipo_controller/index','refresh');
	}

	public function ingresar(){
		$datos['empleado'] = $_POST['empleado'];
		$datos['cod_equipo'] = $_POST['cod_equipo'];
		$datos['horario'] = $_POST['horario'];
		$datos['ruta'] = $_POST['ruta'];

		$result = $this->empleado_equipo_model->set_empleado_equipo($datos);
		if ($result == "success") {
			$data = array(
				'title' =>'Autobuses || empleado_equipo' ,
				'empleado_equipo' => $this->empleado_equipo_model->get_empleado_equipo(),
				'empleado' => $this->empleado_equipo_model->get_empleado(),
				'equipo' => $this->empleado_equipo_model->get_equipo(),
				'horario' => $this->empleado_equipo_model->get_horario(),
				'ruta' => $this->empleado_equipo_model->get_ruta(),
				'msj' => "success");

			$this->load->view('template/header',$data);
			$this->load->view('empleado_equipo_view');
			$this->load->view('template/footer');
		}
		
	}

	public function get_datos($id){
		$data = array(
			'title' =>'Autobuses || empleado_equipo' ,
			'empleado_equipo' => $this->empleado_equipo_model->get_datos($id),
			'empleado' => $this->empleado_equipo_model->get_empleado(),
			'equipo' => $this->empleado_equipo_model->get_equipo(),
			'horario' => $this->empleado_equipo_model->get_horario(),
			'ruta' => $this->empleado_equipo_model->get_ruta());

		$this->load->view('template/header',$data);
		$this->load->view('empleado_equipo_viewAct');
		$this->load->view('template/footer');
	}

	public function actualizar(){
		$datos['id_empleado_equipo'] = $_POST['id_empleado_equipo'];
		$datos['empleado'] = $_POST['empleado'];
		$datos['cod_equipo'] = $_POST['cod_equipo'];
		$datos['horario'] = $_POST['horario'];
		$datos['ruta'] = $_POST['ruta'];
		$datos['id'] = $_POST["id"];

		$result = $this->empleado_equipo_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title' =>'Autobuses || Empleado equipo' ,
				'empleado_equipo' => $this->empleado_equipo_model->get_empleado_equipo(),
				'empleado' => $this->empleado_equipo_model->get_empleado(),
				'equipo' => $this->empleado_equipo_model->get_equipo(),
				'horario' => $this->empleado_equipo_model->get_horario(),
				'ruta' => $this->empleado_equipo_model->get_ruta(),
				'msj' => "modi");
		}else{
			$data = array(
				'title' =>'Autobuses || Empleado equipo' ,
				'empleado_equipo' => $this->empleado_equipo_model->get_empleado_equipo(),
				'empleado' => $this->empleado_equipo_model->get_empleado(),
				'equipo' => $this->empleado_equipo_model->get_equipo(),
				'horario' => $this->empleado_equipo_model->get_horario(),
				'ruta' => $this->empleado_equipo_model->get_ruta(),
				'msj' => "ErrorM");
		}

		$this->load->view('template/header',$data);
		$this->load->view('empleado_equipo_view');
		$this->load->view('template/footer');
		redirect('/empleado_equipo_controller/index','refresh');
	}
	}


?>