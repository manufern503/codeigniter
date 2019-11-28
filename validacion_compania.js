function validar(){

   var nombre_compania = document.getElementById('nombre_compania').value;
   var direccion = document.getElementById('direccion').value;

    if(nombre_compania.length == 0){
        document.getElementById("nombre_compania").style.boxShadow = '0 0 15px red'; 
        document.getElementById("nombre_compania").placeholder = "Este campo es obligatorio";   
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