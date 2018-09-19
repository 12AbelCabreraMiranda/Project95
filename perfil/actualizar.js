// -------------------- FUNCION EDITAR NOMBRE ----------------------
function habilitarNombre(){
    var habil= document.getElementById("nombre");
    habil.disabled=false;     
    $('#botonGuardarNombre').show(); 
    $('#botonCancelarNombre').show();    
    
    //DESACTIVAR APELLIDO
    var habil= document.getElementById("apellido");
    habil.disabled=true;     
    $('#botonGuardarApellido').hide(); 
    $('#botonCancelarApellido').hide();

    //DESACTIVAR ESTABLECIMIENTO
    var habil= document.getElementById("establecimiento");
    habil.disabled=true;     
    $('#botonGuardarEstablecimiento').hide(); 
    $('#botonCancelarEstablecimiento').hide();
    
    //DESACTIVAR PROFESION
    var habil= document.getElementById("profesion");
    habil.disabled=true;     
    $('#botonGuardarProfesion').hide(); 
    $('#botonCancelarProfesion').hide(); 
}
// BOTON guardar cambios
function ActulizarNombre(){
    var habil= document.getElementById("nombre");
    habil.disabled=true;     
    $('#botonGuardarNombre').hide(); 
    $('#botonCancelarNombre').hide();    
}
// BOTON cancelar
function CancelarNombre(){
    var habil= document.getElementById("nombre");
    habil.disabled=true;     
    $('#botonGuardarNombre').hide(); 
    $('#botonCancelarNombre').hide();    
}



// -------------------- FUNCION EDITAR APELLIDO ----------------------
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

    //DESACTIVAR ESTABLECIMIENTO
    var habil= document.getElementById("establecimiento");
    habil.disabled=true;     
    $('#botonGuardarEstablecimiento').hide(); 
    $('#botonCancelarEstablecimiento').hide();

     //DESACTIVAR PROFESION
     var habil= document.getElementById("profesion");
     habil.disabled=true;     
     $('#botonGuardarProfesion').hide(); 
     $('#botonCancelarProfesion').hide(); 
}

// BOTON guardar cambios
function ActulizarApellido(){
    var habil= document.getElementById("apellido");
    habil.disabled=true;     
    $('#botonGuardarApellido').hide(); 
    $('#botonCancelarApellido').hide();    
}
// BOTON cancelar
function CancelarApellido(){
    var habil= document.getElementById("apellido");
    habil.disabled=true;     
    $('#botonGuardarApellido').hide(); 
    $('#botonCancelarApellido').hide();    
}



// -------------------- FUNCION EDITAR ESTABLECIMIENTO ----------------------
function habilitarEstablecimiento(){
    var habil= document.getElementById("establecimiento");
    habil.disabled=false;     
    $('#botonGuardarEstablecimiento').show(); 
    $('#botonCancelarEstablecimiento').show(); 

    //DESACTIVAR NOMBRE
    var habil= document.getElementById("nombre");
    habil.disabled=true;     
    $('#botonGuardarNombre').hide(); 
    $('#botonCancelarNombre').hide();

    //DESACTIVAR APELLIDO
    var habil= document.getElementById("apellido");
    habil.disabled=true;     
    $('#botonGuardarApellido').hide(); 
    $('#botonCancelarApellido').hide();

     //DESACTIVAR PROFESION
     var habil= document.getElementById("profesion");
     habil.disabled=true;     
     $('#botonGuardarProfesion').hide(); 
     $('#botonCancelarProfesion').hide(); 
}

// BOTON guardar cambios
function ActulizarEstablecimiento(){
    var habil= document.getElementById("establecimiento");
    habil.disabled=true;     
    $('#botonGuardarEstablecimiento').hide(); 
    $('#botonCancelarEstablecimiento').hide();    
}
// BOTON cancelar
function CancelarEstablecimiento(){
    var habil= document.getElementById("establecimiento");
    habil.disabled=true;     
    $('#botonGuardarEstablecimiento').hide(); 
    $('#botonCancelarEstablecimiento').hide();    
}




// -------------------- FUNCION EDITAR PROFESIÓN ----------------------
function habilitarProfesion(){
    var habil= document.getElementById("profesion");
    habil.disabled=false;     
    $('#botonGuardarProfesion').show(); 
    $('#botonCancelarProfesion').show(); 

    //DESACTIVAR NOMBRE
    var habil= document.getElementById("nombre");
    habil.disabled=true;     
    $('#botonGuardarNombre').hide(); 
    $('#botonCancelarNombre').hide();

    //DESACTIVAR APELLIDO
    var habil= document.getElementById("apellido");
    habil.disabled=true;     
    $('#botonGuardarApellido').hide(); 
    $('#botonCancelarApellido').hide();

    //DESACTIVAR establecimiento
    var habil= document.getElementById("establecimiento");
    habil.disabled=true;     
    $('#botonGuardarEstablecimiento').hide(); 
    $('#botonCancelarEstablecimiento').hide(); 
}

// BOTON guardar cambios
function ActulizarProfesion(){
    var habil= document.getElementById("profesion");
    habil.disabled=true;     
    $('#botonGuardarProfesion').hide(); 
    $('#botonCancelarProfesion').hide();    
}
// BOTON cancelar
function CancelarProfesion(){
    var habil= document.getElementById("profesion");
    habil.disabled=true;     
    $('#botonGuardarProfesion').hide(); 
    $('#botonCancelarProfesion').hide();    
}