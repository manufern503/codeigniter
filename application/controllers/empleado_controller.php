<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleado_controller extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("empleado_model");
	}

	public function index(){
		$data = array(

			'empleado'  => $this->empleado_model->get_empleado(),
			'nombre_sexo'  => $this->empleado_model->get_nombre_sexo(),
			'nombre_cargo' => $this->empleado_model->get_nombre_cargo(),
			'nombre_estadoe'  => $this->empleado_model->get_nombre_estadoe());
		//Cargamos la vista y le pasamos el arreglo (en este caso llamado $data)
		$this->load->view('template/header',$data);
		$this->load->view('empleado_view');
		$this->load->view('template/footer');

	}

	public function eliminar($id){
		$this->empleado_model->eliminar($id);
		redirect("empleado_controller/index", "refresh");
	}
	public function ingresar(){
		$datos["nombre_empleado"]=$_POST["nombre_empleado"];
		$datos["apellido"]=$_POST["apellido"];
		$datos["edad"]=$_POST["edad"];
		$datos["nombre_sexo"]=$_POST["nombre_sexo"];
		$datos["f_nacimiento"]=$_POST["f_nacimiento"];
		$datos["dui"]=$_POST["dui"];
		$datos["nit"]=$_POST["nit"];
		$datos["licencia"]=$_POST["licencia"];
		$datos["nombre_cargo"]=$_POST["nombre_cargo"];
		$datos["nombre_estadoe"]=$_POST["nombre_estadoe"];


		$msj = $this->empleado_model->ingresar($datos);
		if ($msj == "success"){
			$data = array(
				'empleado'  => $this->empleado_model->get_empleado(),
				'nombre_sexo'  => $this->empleado_model->get_nombre_sexo(),
				'nombre_cargo' => $this->empleado_model->get_nombre_cargo(),
				'nombre_estadoe'  => $this->empleado_model->get_nombre_estadoe(),
			//Estos esta en la funcion indexs
             'msj' => "success");  //Esto se agrega (no se encuentra en el index)

			$this->load->view('template/header',$data);
			$this->load->view('empleado_view');
			$this->load->view('template/footer');
		}
	}

	public function get_datos($id){
		$data = array(
			'title'   => 'Universidad || Alumnos', 
			'empleado'  => $this->empleado_model->get_datos($id),
			'nombre_sexo'  => $this->empleado_model->get_nombre_sexo(),
			'nombre_cargo' => $this->empleado_model->get_nombre_cargo(),
			'nombre_estadoe'  => $this->empleado_model->get_nombre_estadoe());
		//Cargamos la vista y le pasamos el arreglo (en este caso llamado $data)
		$this->load->view('template/header',$data);
		$this->load->view('empleado_viewAct');
		$this->load->view('template/footer');


	}
	public function actualizar(){
		$datos["id"]=$_POST["id"];
		$datos["nombre_empleado"]=$_POST["nombre_empleado"];
		$datos["apellido"]=$_POST["apellido"];
		$datos["edad"]=$_POST["edad"];
		$datos["nombre_sexo"]=$_POST["nombre_sexo"];
		$datos["f_nacimiento"]=$_POST["f_nacimiento"];
		$datos["dui"]=$_POST["dui"];
		$datos["nit"]=$_POST["nit"];
		$datos["licencia"]=$_POST["licencia"];
		$datos["nombre_cargo"]=$_POST["nombre_cargo"];
		$datos["nombre_estadoe"]=$_POST["nombre_estadoe"];

		$result = $this->empleado_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'   => ' || ', 
				'empleado'  => $this->empleado_model->get_empleado(),
				'nombre_sexo'  => $this->empleado_model->get_nombre_sexo(),
				'nombre_cargo' => $this->empleado_model->get_nombre_cargo(),
				'nombre_estadoe'  => $this->empleado_model->get_nombre_estadoe(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'   => ' || ', 
				'empleado'  => $this->empleado_model->get_empleado(),
				'nombre_sexo'  => $this->empleado_model->get_nombre_sexo(),
				'nombre_cargo' => $this->empleado_model->get_nombre_cargo(),
				'nombre_estadoe'  => $this->empleado_model->get_nombre_estadoe(),
				'msj'     => "ErrorM");
     }
		$this->load->view('template/header',$data);
		$this->load->view('empleado_view');
		$this->load->view('template/footer');
	}

}
