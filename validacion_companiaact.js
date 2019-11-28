function validar2(){

   var nombre_compania2 = document.getElementById('nombre_compania2').value;
   var direccion = document.getElementById('direccion').value;

    if(nombre_compania2.length == 0){
        document.getElementById("nombre_compania2").style.boxShadow = '0 0 15px red'; 
        document.getElementById("nombre_compania2").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("nombre_compania").style.boxShadow = '0 0 15px green';
    }
    if(direccion.length == 0){
        document.getElementById("direccion").style.boxShadow = '0 0 15px red'; 
        document.getElementById("direccion").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
        document.getElementById("direccion").style.boxShadow = '0 0 15px green';
    }

   return true;

// PARA COLOCAR COLOR A UN INPUT QUE ESTA VACIO
// document.getElementById("nombre").style.backgroundColor = "red";
}