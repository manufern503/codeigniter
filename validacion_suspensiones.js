function validar(){
	var fecha = document.getElementById('fecha').value;
	var cod_equipo = document.getElementById('cod_equipo').selectedIndex;
	var empleado = document.getElementById('empleado').selectedIndex;
	var n_dias = document.getElementById('n_dias').value;
	var motivo = document.getElementById('motivo').value;
	var observaciones = document.getElementById('observaciones').value;

	if(fecha == ""){
		document.getElementById("fecha").style.boxShadow = '0 0 15px red';
		return false;
	}else{
		document.getElementById("fecha").style.boxShadow = '0 0 15px green';
	}

	if (cod_equipo == 0) {
		document.getElementById("cod_equipo").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("cod_equipo").style.boxShadow = '0 0 15px green';
	}

	if (empleado == 0) {
		document.getElementById("empleado").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("empleado").style.boxShadow = '0 0 15px green';
	}

	if (isNaN(n_dias) || n_dias.length == 0) {
		document.getElementById("n_dias").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("n_dias").style.boxShadow = '0 0 15px green';
	}

	if (motivo.length == 0) {
		document.getElementById("motivo").style.backgroundColo.style.boxShadow = '0 0 15px red';
		document.getElementById("motivo").placeholder = "Este campo es obligatorio";

		return false;
	}else{
		document.getElementById("motivo").style.boxShadow = '0 0 15px green';
	}

	if (observaciones.length == 0) {
		document.getElementById("observaciones").style.boxShadow = '0 0 15px red';
		document.getElementById("observaciones").placeholder = "Este campo es obligatorio";

		return false;
	}else{
		document.getElementById("observaciones").style.boxShadow = '0 0 15px green';
	}

	return true;
}