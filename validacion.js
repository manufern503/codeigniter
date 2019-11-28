function validarFormulario(){

   var nombre_empleado = document.getElementById('nombre_empleado').value;
   var apellido = document.getElementById('apellido').value;
     var edad = document.getElementById('edad').value;
     var nombre_sexo = document.getElementById('nombre_sexo').selectedIndex;
    var f_nacimiento = document.getElementById('f_nacimiento').value;
     var dui = document.getElementById('dui').value;
     var nit = document.getElementById('nit').value;
    var licencia = document.getElementById('licencia').value;
     var nombre_cargo = document.getElementById('nombre_cargo').selectedIndex;
       var nombre_estadoe = document.getElementById('nombre_estadoe').selectedIndex;

   

    //Validar campo obligatorio
    if(nombre_empleado.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("nombre_empleado").style.boxShadow = '0 0 15px red'; 
        document.getElementById("nombre_empleado").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("nombre_empleado").style.boxShadow = '0 0 15px green';
    }
    if(apellido.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("apellido").style.boxShadow = '0 0 15px red'; 
        document.getElementById("apellido").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("apellido").style.boxShadow = '0 0 15px green';
    }
     if(edad.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("edad").style.boxShadow = '0 0 15px red'; 
        document.getElementById("edad").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("edad").style.boxShadow = '0 0 15px green';
    }
    if(nombre_sexo == 0){
    document.getElementById("nombre_sexo").style.boxShadow = '0 0 30px red'; 
    return false;
}else{
    document.getElementById("nombre_sexo").style.boxShadow = '0 0 30px green';
}
if(f_nacimiento.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("f_nacimiento").style.boxShadow = '0 0 15px red'; 
        document.getElementById("f_nacimiento").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("f_nacimiento").style.boxShadow = '0 0 15px green';
    }
    if(dui.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("dui").style.boxShadow = '0 0 15px red'; 
        document.getElementById("dui").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("dui").style.boxShadow = '0 0 15px green';
    }
     if(nit.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("nit").style.boxShadow = '0 0 15px red'; 
        document.getElementById("nit").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("nit").style.boxShadow = '0 0 15px green';
    }
     if(licencia.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("licencia").style.boxShadow = '0 0 15px red'; 
        document.getElementById("licencia").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("licencia").style.boxShadow = '0 0 15px green';
    }
     if(nombre_cargo == 0){
    document.getElementById("nombre_cargo").style.boxShadow = '0 0 30px red'; 
    return false;
}else{
    document.getElementById("nombre_cargo").style.boxShadow = '0 0 30px green';
}
 if(nombre_estadoe == 0){
    document.getElementById("nombre_estadoe").style.boxShadow = '0 0 30px red'; 
    return false;
}else{
    document.getElementById("nombre_estadoe").style.boxShadow = '0 0 30px green';
}





    return true;

// PARA COLOCAR COLOR A UN INPUT QUE ESTA VACIO
// document.getElementById("nombre").style.backgroundColor = "red";
}