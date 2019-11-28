function validar(){
	var empleado = document.getElementById('empleado').selectedIndex;
	var cod_equipo = document.getElementById('cod_equipo').selectedIndex;
	var horario = document.getElementById('horario').selectedIndex;
	var ruta = document.getElementById('ruta').selectedIndex;

	if (empleado == 0) {
		document.getElementById("empleado").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("empleado").style.boxShadow = '0 0 15px green';
	}

	if (cod_equipo == 0) {
		document.getElementById("cod_equipo").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("cod_equipo").style.boxShadow = '0 0 15px green';
	}

	if (horario == 0) {
		document.getElementById("horario").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("horario").style.boxShadow = '0 0 15px green';
	}

	if (ruta == 0) {
		document.getElementById("ruta").style.boxShadow = '0 0 15px red';

		return false;
	}else{
		document.getElementById("ruta").style.boxShadow = '0 0 15px green';
	}

	return true;
}