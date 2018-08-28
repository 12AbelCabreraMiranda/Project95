$(document).ready(function(){
    $(".insetarPuntos").submit(insertP)
    function insertP(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($(".insetarPuntos")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        //$(".correcto").html("<a href='#'> <img class='img-responsive' src='../img/correcto.png'> </a>");        
        $('#mostrar_correcto').show();
        $('.insetarPuntos').hide();
        //var n= document.getElementById("nombre_alumno").innerHTML ; //Extrae el valor de la etiqueta //ESTO ES PARA TRAER ID
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

function probando(){
    $('#mostrar_incorrecto').show();
    $('.insetarPuntos').hide();
}

function mostrar(){
    $('#mostrar_incorrecto').hide();
    $('.insetarPuntos').show();
}

function clasesId(){
    //$(document).ready(function(){
        //$("#bot").click(function(){
            var pruebass=$(".valores").text();
            alert(pruebass);
        //});
    //});
}

