// -------------------- FUNCION EDITAR NOMBRE ----------------------
function habilitarNombre(){
    var habil= document.getElementById("nombre");
    habil.disabled=false;     
    $('#botonGuardarNombre').show(); 
    $('#botonCancelarNombre').show();  
    $("#form_contrasenia")[0].reset();  //RESETEA EL INPUT    
    
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

    //DESACTIVAR NUEVO USUARIO
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide(); 

    //DESACTIVAR CONTRASEÑA
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide(); 
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
    $("#form_contrasenia")[0].reset();  //RESETEA EL INPUT  

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

    //DESACTIVAR NUEVO USUARIO
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide(); 

    //DESACTIVAR CONTRASEÑA
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide(); 
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
    $("#form_contrasenia")[0].reset();  //RESETEA EL INPUT  

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

    //DESACTIVAR NUEVO USUARIO
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide(); 

    //DESACTIVAR CONTRASEÑA
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide(); 
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
    $("#form_contrasenia")[0].reset();  //RESETEA EL INPUT  

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

    //DESACTIVAR NUEVO USUARIO
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide(); 
    
    //DESACTIVAR CONTRASEÑA
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide(); 
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



// -------------------- FUNCIONES DE SEGURIDAD ----------------------

// -------------------- EDIDTAR NUEVO USUARIO ----------------------
function habilitarUsuario(){
    var habil= document.getElementById("usuario");
    habil.disabled=false;     
    $('#botonGuardarrUsuario').show(); 
    $('#botonCancelarrUsuario').show();
    $("#form_contrasenia")[0].reset();  //RESETEA EL INPUT   

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
    
    //DESACTIVAR PROFESION
    var habil= document.getElementById("profesion");
    habil.disabled=true;     
    $('#botonGuardarProfesion').hide(); 
    $('#botonCancelarProfesion').hide(); 

    //DESACTIVAR CONTRASEÑA
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide(); 
}

// BOTON guardar cambios
function ActulizarrUsuario(){
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide();    
}
// BOTON cancelar
function CancelarrUsuario(){
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide();    
}



// -------------------- EDIDTAR NUEVA CONTRASEÑA ----------------------
function habilitarContrasenia(){
    var habil= document.getElementById("contrasenia");
    habil.disabled=false;     
    $('#botonGuardarContrasenia').show(); 
    $('#botonCancelarContrasenia').show(); 

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
    
    //DESACTIVAR PROFESION
    var habil= document.getElementById("profesion");
    habil.disabled=true;     
    $('#botonGuardarProfesion').hide(); 
    $('#botonCancelarProfesion').hide(); 

    //DESACTIVAR NUEVO USUARIO
    var habil= document.getElementById("usuario");
    habil.disabled=true;     
    $('#botonGuardarrUsuario').hide(); 
    $('#botonCancelarrUsuario').hide(); 
}

// BOTON guardar cambios
function ActulizarContrasenia(){
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide();  
    document.getElementById("contrasenia").innerHTML =" "; 
    $("#form_contrasenia")[0].reset(); 

}
// BOTON cancelar
function CancelarContrasenia(){
    var habil= document.getElementById("contrasenia");
    habil.disabled=true;     
    $('#botonGuardarContrasenia').hide(); 
    $('#botonCancelarContrasenia').hide();
    $("#form_contrasenia")[0].reset();  //RESETEA EL INPUT  
}


function editarDatos(){
    $('.data').show(); 
}






