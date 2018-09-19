function habilitarNombre(){
    //alert("habilitado");
    var habil= document.getElementById("nombre");
    habil.disabled=false;     
    $('#botonGuardarNombre').show(); 
    $('#botonCancelarNombre').show();    
    
    //DESACTIVAR APELLIDO
    var habil= document.getElementById("apellido");
    habil.disabled=true;     
    $('#botonGuardarApellido').hide(); 
    $('#botonCancelarApellido').hide();
}

function habilitarApellido(){
    var habil= document.getElementById("apellido");
    habil.disabled=false;     
    $('#botonGuardarApellido').show(); 
    $('#botonCancelarApellido').show(); 

    //DESACTIVAR NOMBRE
    var habil= document.getElementById("nombre");
    habil.disabled=true;     
    $('#botonGuardarNombre').hide(); 
    $('#botonCancelarNombre').hide();

}