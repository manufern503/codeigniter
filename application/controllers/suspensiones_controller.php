<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class suspensiones_controller extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('suspensiones_model');
	}

	public function index(){
		$data = array(
			'title' =>'Autobuses || Suspensiones' ,
			'suspensiones' => $this->suspensiones_model->get_suspensiones(),
			'equipo' => $this->suspensiones_model->get_equipo(),
			'empleado' => $this->suspensiones_model->get_empleado() );
		
		$this->load->view('template/header',$data);
		$this->load->view('suspensiones_view');
		$this->load->view('template/footer');
	}

	public function eliminar($id){
		$this->suspensiones_model->eliminar($id);
		redirect('suspensiones_controller/index','refresh');
	}

	public function ingresar(){
		$datos["fecha"] = $_POST["fecha"];
		$datos["cod_equipo"] = $_POST["cod_equipo"];
		$datos["id_empleado"] = $_POST["empleado"];
		$datos["n_dias"] = $_POST["n_dias"];
		$datos["motivo"] = $_POST["motivo"];
		$datos["observaciones"] = $_POST["observaciones"];

		$result = $this->suspensiones_model->set_suspensiones($datos);
		if ($result == "success") {
			$data = array(
				'title' =>'Autobuses || Suspensiones' ,
				'suspensiones' => $this->suspensiones_model->get_suspensiones(),
				'equipo' => $this->suspensiones_model->get_equipo(),
				'empleado' => $this->suspensiones_model->get_empleado(),
				'msj' => "success" );
			$this->load->view('template/header',$data);
			$this->load->view('suspensiones_view');
			$this->load->view('template/footer');
			
		}

		
	}

	public function get_datos($id){
		$data = array(
			'title' =>'Autobuses || Suspensiones' ,
			'suspensiones' => $this->suspensiones_model->get_datos($id),
			'cod_equipo' => $this->suspensiones_model->get_equipo(),
			'empleado' => $this->suspensiones_model->get_empleado());
		
		$this->load->view('template/header',$data);
		$this->load->view('suspensiones_viewAct');
		$this->load->view('template/footer');
	}

	public function actualizar(){
		
		$datos["fecha"] = $_POST["fecha"];
		$datos["cod_equipo"] = $_POST["cod_equipo"];
		$datos["empleado"] = $_POST["empleado"];
		$datos["n_dias"] = $_POST["n_dias"];
		$datos["motivo"] = $_POST["motivo"];
		$datos["observaciones"] = $_POST["observaciones"];
		$datos["id"] = $_POST["id"];
		
		$result = $this->suspensiones_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title' =>'Autobuses || Suspensiones' ,
				'suspensiones' => $this->suspensiones_model->get_suspensiones(),
				'equipo' => $this->suspensiones_model->get_equipo(),
				'empleado' => $this->suspensiones_model->get_empleado(),
				'msj' => "modi" );
		}else {
			$data = array(
				'title' => 'Autobuses || suspensiones',
				'suspensiones' => $this->suspensiones_model->get_suspensiones(),
				'equipo' => $this->suspensiones_model->get_equipo(),
				'empleado' => $this->suspensiones_model->get_empleado(),
				'msj' => "ErrorM" );
		}
		$this->load->view('template/header',$data);
		$this->load->view('suspensiones_view');
		$this->load->view('template/footer');

	}
}

?>