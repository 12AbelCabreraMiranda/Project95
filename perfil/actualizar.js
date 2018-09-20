
$(document).ready(function(){
    // *************** FUNCION DE ACTUALIZACION Y MOSTRAR NUEVO NOMBRE  ****************
    $("#form_nombre").submit(ActulizarNombre)
    function ActulizarNombre(evento){
        evento.preventDefault()      
        
        var datos = new FormData($("#form_nombre")[0])
        //ACCIONES ENABLED Y DISABLED
        var habil= document.getElementById("nombre");
        habil.disabled=true;     
        $('#botonGuardarNombre').hide(); 
        $('#botonCancelarNombre').hide(); 

        // ETIQUETA AUTOMATICO
        $("#respuesta_nombre").show(); // APARECE CADA VEZ QUE HAY UPDATE Y DESPUES YA SE EJECUTA LA FUNCION DEL TIEMPO
        setTimeout(function(){
            $("#respuesta_nombre").hide();// SE OCULTA DESPUES DE 4 SEGUNDOS LA RESPUESTA
        },4000); // 4000ms = 4s

        $("#respuesta_nombre").html("<img src='../img/cargando.gif' style='height:30px'> ")
            //ACTUALIZACION DE NOMBRE
            $.ajax({
            url: 'actualizar_nombre.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#respuesta_nombre").html(datos)
                }
            })
          // CONSULTA DEL NUEVO NOMBRE
          $.ajax({
            url: 'select_nombreMaestro.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#nombreNuevo").html(datos)
                }
            })
    }


    // *************** FUNCION DE ACTUALIZACION Y MOSTRAR NUEVO APELLIDO  ****************
    $("#form_apellido").submit(ActulizarApellido)
    function ActulizarApellido(evento){
        evento.preventDefault()      
        
        var datos = new FormData($("#form_apellido")[0])
        //ACCIONES ENABLED Y DISABLED
        var habil= document.getElementById("apellido");
        habil.disabled=true;     
        $('#botonGuardarApellido').hide(); 
        $('#botonCancelarApellido').hide();   

        // ETIQUETA AUTOMATICO
        $("#respuesta_apellido").show(); // APARECE CADA VEZ QUE HAY UPDATE Y DESPUES YA SE EJECUTA LA FUNCION DEL TIEMPO
        setTimeout(function(){
            $("#respuesta_apellido").hide();// SE OCULTA DESPUES DE 4 SEGUNDOS LA RESPUESTA
        },4000); // 4000ms = 4s

        $("#respuesta_apellido").html("<img src='../img/cargando.gif' style='height:30px'> ")
            //ACTUALIZACION DE NOMBRE
            $.ajax({
            url: 'actualizar_apellido.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#respuesta_apellido").html(datos)
                }
            })
            // CONSULTA DEL NUEVO NOMBRE
            $.ajax({
            url: 'select_apellidoMaestro.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#apellidoNuevo").html(datos)
                }
            })
    }


    // *************** FUNCION DE ACTUALIZACION Y MOSTRAR NUEVO ESTABLECIMIENTO  ****************
    $("#form_establecimiento").submit(ActulizarEstablecimiento)
    function ActulizarEstablecimiento(evento){
        evento.preventDefault()      
        
        var datos = new FormData($("#form_establecimiento")[0])
        //ACCIONES ENABLED Y DISABLED
        var habil= document.getElementById("establecimiento");
        habil.disabled=true;     
        $('#botonGuardarEstablecimiento').hide(); 
        $('#botonCancelarEstablecimiento').hide();    

        // ETIQUETA AUTOMATICO
        $("#respuesta_establecimiento").show(); // APARECE CADA VEZ QUE HAY UPDATE Y DESPUES YA SE EJECUTA LA FUNCION DEL TIEMPO
        setTimeout(function(){
            $("#respuesta_establecimiento").hide();// SE OCULTA DESPUES DE 4 SEGUNDOS LA RESPUESTA
        },4000); // 4000ms = 4s

        $("#respuesta_establecimiento").html("<img src='../img/cargando.gif' style='height:30px'> ")
            //ACTUALIZACION DE NOMBRE
            $.ajax({
            url: 'actualizar_establecimiento.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#respuesta_establecimiento").html(datos)
                }
            })
            // CONSULTA DEL NUEVO NOMBRE
            $.ajax({
            url: 'select_establecimiento.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#mi_establecimiento_edu").html(datos)
                }
            })
    }


    // *************** FUNCION DE ACTUALIZACION Y MOSTRAR NUEVO PROFESION  ****************
    $("#form_profesion").submit(ActulizarProfesion)
    function ActulizarProfesion(evento){
        evento.preventDefault()      
        
        var datos = new FormData($("#form_profesion")[0])
        //ACCIONES ENABLED Y DISABLED
        var habil= document.getElementById("profesion");
        habil.disabled=true;     
        $('#botonGuardarProfesion').hide(); 
        $('#botonCancelarProfesion').hide();
        

        // ETIQUETA AUTOMATICO
        $("#respuesta_profesion").show(); // APARECE CADA VEZ QUE HAY UPDATE Y DESPUES YA SE EJECUTA LA FUNCION DEL TIEMPO
        setTimeout(function(){
            $("#respuesta_profesion").hide();// SE OCULTA DESPUES DE 4 SEGUNDOS LA RESPUESTA
        },4000); // 4000ms = 4s

        $("#respuesta_profesion").html("<img src='../img/cargando.gif' style='height:30px'> ")
            //ACTUALIZACION DE NOMBRE
            $.ajax({
            url: 'actualizar_profesion.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#respuesta_profesion").html(datos)
                }
            })
            // CONSULTA DEL NUEVO NOMBRE
            $.ajax({
            url: 'select_profesion.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#profesion_edu").html(datos)
                }
            })
    }


    // *************** FUNCION DE ACTUALIZACION USUARIO ****************
    $("#form_usuario").submit(ActulizarrUsuario)
    function ActulizarrUsuario(evento){
        evento.preventDefault()      
        
        var datos = new FormData($("#form_usuario")[0])
        //ACCIONES ENABLED Y DISABLED
        var habil= document.getElementById("usuario");
        habil.disabled=true;     
        $('#botonGuardarrUsuario').hide(); 
        $('#botonCancelarrUsuario').hide();  
        

        // ETIQUETA AUTOMATICO
        $("#respuesta_usuario").show(); // APARECE CADA VEZ QUE HAY UPDATE Y DESPUES YA SE EJECUTA LA FUNCION DEL TIEMPO
        setTimeout(function(){
            $("#respuesta_usuario").hide();// SE OCULTA DESPUES DE 4 SEGUNDOS LA RESPUESTA
        },4000); // 4000ms = 4s

        $("#respuesta_usuario").html("<img src='../img/cargando.gif' style='height:30px'> ")
            //ACTUALIZACION DE NOMBRE
            $.ajax({
            url: 'actualizar_usuario.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#respuesta_usuario").html(datos)
                }
            })

    }


    // *************** FUNCION DE ACTUALIZACION CONTRASEÑA ****************
    $("#form_contrasenia").submit(ActulizarContrasenia)
    function ActulizarContrasenia(evento){
        evento.preventDefault()      
        
        var datos = new FormData($("#form_contrasenia")[0])
        //ACCIONES ENABLED Y DISABLED
        var habil= document.getElementById("contrasenia");
        habil.disabled=true;     
        $('#botonGuardarContrasenia').hide(); 
        $('#botonCancelarContrasenia').hide();  
        //document.getElementById("contrasenia").innerHTML =" "; 
        $("#form_contrasenia")[0].reset(); 
        

        // ETIQUETA AUTOMATICO
        $("#respuesta_contrasenia").show(); // APARECE CADA VEZ QUE HAY UPDATE Y DESPUES YA SE EJECUTA LA FUNCION DEL TIEMPO
        setTimeout(function(){
            $("#respuesta_contrasenia").hide();// SE OCULTA DESPUES DE 4 SEGUNDOS LA RESPUESTA
        },4000); // 4000ms = 4s

        $("#respuesta_contrasenia").html("<img src='../img/cargando.gif' style='height:30px'> ")
            //ACTUALIZACION DE NOMBRE
            $.ajax({
            url: 'actualizar_contrasenia.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
                success: function(datos){
                    $("#respuesta_contrasenia").html(datos)
                }
            })

    }


})


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

function cerrar(){
    $('.data').hide();
}





