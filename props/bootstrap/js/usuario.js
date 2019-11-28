function validarFormularios(){

	var nombre = document.getElementById('nombre').value;
	var usuario = document.getElementById('usuario').value;
	var correo = document.getElementById('correo').value;
	var nombre_rol = document.getElementById('nombre_rol').selectedIndex;
	

	//validar campo obligatorio
	if(nombre.length == 0){
		document.getElementById('nombre').style.boxShadow ='0 0 15px red';
		document.getElementById('nombre').placeholder = "este campo es obligatorio";
		return false;
	}else{
		document.getElementById("nombre").style.boxShadow = '0 0 15px green';
	}
	//validar campo obligatorio
	if(usuario.length ==0){
		document.getElementById('usuario').style.boxShadow ='0 0 15px red';
		document.getElementById('usuario').placeholder="este campo es obligatorio";
		return false;

	}else{
		document.getElementById('usuario').style.boxShadow ='0 0 15px green';
	}
	//validar fecha

	if(!(/\S+@\S+\.\S+/.test(correo))){
		document.getElementById('correo').style.boxShadow= '0 0 15px red';
		document.getElementById('correo').placeholder='este campo es obligatorio';
		return false;

	}else{
		document.getElementById('correo').style.boxShadow='0 0 15px green';
	}

	//validar tipo incidencias

	if(nombre_rol == 0){
		document.getElementById('nombre_rol').style.boxShadow = '0 0 15px red';
		return false;
	}else{
		document.getElementById('nombre_rol').style.boxShadow = '0 0 15px green';
	}
	return true;
}