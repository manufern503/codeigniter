function validarFormularios(){

	var costo = document.getElementById('costo').value;
	var descripcion = document.getElementById('descripcion').value;
	var fecha = document.getElementById('fecha').value;
	var tipo_insidencias = document.getElementById('tipo_incidencias').selectedIndex;
	var cod_equipo = document.getElementById('cod_equipo').selectedIndex;

	//validar campo obligatorio

	if(isNaN(costo) || costo.length == 0){
		document.getElementById('costo').style.boxShadow ='0 0 15px red';
		document.getElementById('costo').placeholder="este campo es obligatorio";
		return false;
	}else{
		document.getElementById("costo").style.boxShadow = '0 0 15px green';
	}

	if(costo.length ==4){
		document.getElementById('costo').style.boxShadow ='0 0 15px green';
	}else{
		document.getElementById('costo').style.boxShadow ='0 0 15px red';
		document.getElementById('costo').value ='';
		document.getElementById('costo').placeholder = 'logitud Maxima: 4';
		return false;
	}

	//validar campo obligatorio
	if(descripcion.length ==0){
		document.getElementById('descripcion').style.boxShadow ='0 0 15px red';
		document.getElementById('descripcion').placeholder="este campo es obligatorio";
		return false;

	}else{
		document.getElementById('descripcion').style.boxShadow ='0 0 15px green';
	}
	//validar fecha

	if(fecha.length == ""){
		document.getElementById('fecha').style.boxShadow= '0 0 15px red';
		document.getElementById('fecha').placeholder='este campo es obligatorio';
		return false;

	}else{
		document.getElementById('fecha').style.boxShadow='0 0 15px green';
	}

	//validar tipo incidencias

	if(tipo_insidencias == 0){
		document.getElementById('tipo_incidencias').style.boxShadow = '0 0 15px red';
		return false;
	}else{
		document.getElementById('tipo_incidencias').style.boxShadow = '0 0 15px green';
	}
	//validar codigo
	if(cod_equipo == 0){
		document.getElementById("cod_equipo").style.boxShadow = '0 0 15px red'; 
		return false;
	}else{
		document.getElementById("cod_equipo").style.boxShadow = '0 0 15px green';
	}
	return true;
}