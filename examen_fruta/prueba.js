$(document).ready(function(){
    $("#form2").submit(insertP)
    function insertP(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#form2")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        //$(".correcto").html("<a href='#'> <img class='img-responsive' src='../img/correcto.png'> </a>");        
        $('#mostrar_correcto').show();
        $('#form2').hide();
        
        // DETIENE EL AUDIO ANTERIOR
        setTimeout(function(){
            var audio = document.getElementById("audio1");               
            audio.muted = true;
        },0); // cero segundos

        var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
          $.ajax({
              url: 'prueba.php?nombre='+n,// nombre es una variable para ser redireccionado para php
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $("#respuesta").html(datos)                  
              }
          })                 
    }
    //  -----------FUNCIONES PARA LA SEGUNDA VALIDACION DEL FORMULARIO CON IMAGENES ---------------
    $("#form3").submit(insertP2)
    function insertP2(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#form3")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        //$(".correcto").html("<a href='#'> <img class='img-responsive' src='../img/correcto.png'> </a>");        
        $('#mostrar_correcto2').show();
        $('#form3').hide();
        $('#respuesta').show();
        
        // DETIENE EL AUDIO ANTERIOR
        setTimeout(function(){
            var audio = document.getElementById("audio2");               
            audio.muted = true;
        },0); // cero segundos

        var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
          $.ajax({
              url: 'prueba.php?nombre='+n,// nombre es una variable para ser redireccionado para php
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $("#respuesta").html(datos)                  
              }
          })                 
    }

    //  -----------FUNCIONES PARA LA TERCERA VALIDACION DEL FORMULARIO CON IMAGENES ---------------
    $("#form4").submit(insertP3)
    function insertP3(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#form4")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        //$(".correcto").html("<a href='#'> <img class='img-responsive' src='../img/correcto.png'> </a>");        
        $('#mostrar_correcto3').show();
        $('#form4').hide();
        $('#respuesta').show();
        
        // DETIENE EL AUDIO ANTERIOR
        setTimeout(function(){
            var audio = document.getElementById("audio3");               
            audio.muted = true;
        },0); // cero segundos

        var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
          $.ajax({
              url: 'prueba.php?nombre='+n,// nombre es una variable para ser redireccionado para php
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $("#respuesta").html(datos)                  
              }
          })                 
    }

    //  -----------FUNCIONES PARA LA CUARTA VALIDACION DEL FORMULARIO CON IMAGENES ---------------
    $("#form5").submit(insertP4)
    function insertP4(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#form5")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        //$(".correcto").html("<a href='#'> <img class='img-responsive' src='../img/correcto.png'> </a>");        
        $('#mostrar_correcto4').show();
        $('#form5').hide();
        $('#respuesta').show();
        
        // DETIENE EL AUDIO ANTERIOR
        setTimeout(function(){
            var audio = document.getElementById("audio4");               
            audio.muted = true;
        },0); // cero segundos

        var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
            $.ajax({
                url: 'prueba.php?nombre='+n,// nombre es una variable para ser redireccionado para php
                type: 'POST',
                data: datos,
                contentType: false, //se anota porque se mandarán archivos
                processData: false,
                success: function(datos){
                    $("#respuesta").html(datos)                  
                }
            })                 
    }

    //  -----------FUNCIONES PARA LA CUARTA VALIDACION DEL FORMULARIO CON IMAGENES ---------------
    $("#form6").submit(insertP5)
    function insertP5(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#form6")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        //$(".correcto").html("<a href='#'> <img class='img-responsive' src='../img/correcto.png'> </a>");        
        $('#mostrar_correcto5').show();
        $('#form6').hide();
        $('#respuesta').show();
        
        // DETIENE EL AUDIO ANTERIOR
        setTimeout(function(){
            var audio = document.getElementById("audio5");               
            audio.muted = true;
        },0); // cero segundos

        var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
            $.ajax({
                url: 'prueba.php?nombre='+n,// nombre es una variable para ser redireccionado para php
                type: 'POST',
                data: datos,
                contentType: false, //se anota porque se mandarán archivos
                processData: false,
                success: function(datos){
                    $("#respuesta").html(datos)                  
                }
            })                 
    }

})


//  -----------FUNCIONES PARA LA PRIMERA VALIDACION DEL FORMULARIO CON IMAGENES
function guardando_alumno(){
    $('#form2').show();
    $('.nombre_alumno').hide();   
    $('#guardarEstudiante').hide(); 
}

// BOTON DE IMAGEN CORRECTO
function siguienteForm(){
    $('#form3').show();
    $('#mostrar_correcto').hide();
    $('#respuesta').hide();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio2");               
        audio.play();
    },2000); // 2000ms = 3s
}

// INCORRECTOS
function incorrecto1(){
    $('#incorrecto1').show();
    $('#form2').hide();
    // DETIENE EL AUDIO ANTERIOR
    setTimeout(function(){
        var audio = document.getElementById("audio1");               
        audio.muted = true;
    },0); // cero segundos

}
function NextForm2(){
    $('#incorrecto1').hide();
    $('#form3').show();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio2");               
        audio.play();
    },2000); // 2000ms = 3s
}


//  -----------FUNCIONES PARA LA SEGUNDA VALIDACION DEL FORMULARIO CON IMAGENES ---------------
function siguienteForm3(){
    $('#form4').show();
    $('#mostrar_correcto2').hide();
    $('#respuesta').hide();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio3");               
        audio.play();
    },2000); // 2000ms = 3s
}

// INCORRECTOS
function incorrecto2(){
    $('#incorrecto2').show();
    $('#form3').hide();
    // DETIENE EL AUDIO ANTERIOR
    setTimeout(function(){
        var audio = document.getElementById("audio2");               
        audio.muted = true;
    },0); // cero segundos
}
function NextForm3(){
    $('#incorrecto2').hide();
    $('#form4').show();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio3");               
        audio.play();
    },2000); // 2000ms = 3s
}
//  -----------FUNCIONES PARA LA tercera VALIDACION DEL FORMULARIO CON IMAGENES ---------------
function siguienteForm4(){
    $('#form5').show();
    $('#mostrar_correcto3').hide();
    $('#respuesta').hide();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio4");               
        audio.play();
    },2000); // 2000ms = 3s
}
//INCORRECTOS
function incorrecto3(){
    $('#incorrecto3').show();
    $('#form4').hide();
    // DETIENE EL AUDIO ANTERIOR
    setTimeout(function(){
        var audio = document.getElementById("audio3");               
        audio.muted = true;
    },0); // cero segundos
}
function NextForm4(){
    $('#incorrecto3').hide();
    $('#form5').show();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio4");               
        audio.play();
    },2000); // 2000ms = 3s
}

//  -----------FUNCIONES PARA LA cuarta VALIDACION DEL FORMULARIO CON IMAGENES ---------------
function siguienteForm5(){
    $('#form6').show();
    $('#mostrar_correcto4').hide();
    $('#respuesta').hide();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio5");               
        audio.play();
    },2000); // 2000ms = 3s
}
function incorrecto4(){
    $('#incorrecto4').show();
    $('#form5').hide();
    // DETIENE EL AUDIO ANTERIOR
    setTimeout(function(){
        var audio = document.getElementById("audio4");               
        audio.muted = true;
    },0); // cero segundos
}
function NextForm5(){
    $('#incorrecto4').hide();
    $('#form6').show();

    // AUDIO AUTOMATICO
    setTimeout(function(){
        var audio = document.getElementById("audio5");               
        audio.play();
    },2000); // 2000ms = 3s
}
//  -----------FUNCIONES PARA LA quinta VALIDACION DEL FORMULARIO CON IMAGENES ------CORRECTO---------
$("#form_puntos_correctos").submit(siguienteForm6)
function siguienteForm6(evento){
    evento.preventDefault()
    //alert("funciona");
    var datos = new FormData($("#form_puntos_correctos")[0])
    $('#mostrar_correcto5').hide();
    $('#respuesta').hide();
    $('#respuesta_puntos').show();
    $('#fondo_puntos').show();
    
    var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
        $.ajax({
            url: 'puntos.php?nombres='+n,// nombre es una variable para ser redireccionado para php
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
            success: function(datos){
                $("#respuesta_puntos").html(datos)                  
            }
        })                 
}

function incorrecto5(){
    $('#incorrecto5').show();
    $('#form6').hide();
    // DETIENE EL AUDIO ANTERIOR
    setTimeout(function(){
        var audio = document.getElementById("audio5");               
        audio.muted = true;
    },0); // cero segundos
}
//  -----------FUNCIONES PARA LA quinta VALIDACION DEL FORMULARIO CON IMAGENES -------INCORRECTO--------
$("#form_puntos").submit(verPuntos)
function verPuntos(evento){
    evento.preventDefault()
    //alert("funciona");
    var datos = new FormData($("#form_puntos")[0])
    //$("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
    $('#incorrecto5').hide();
    $('#fondo_puntos').show();
    
    var n = $(".nombre_alumno").text();//PERMITE EXTRAER EL VALOR DE LA CLASE EN LUGAR DE ID
        $.ajax({
            url: 'puntos.php?nombres='+n,// nombre es una variable para ser redireccionado para php
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
            success: function(datos){
                $("#respuesta_puntos").html(datos)                  
            }
        })                 
}




