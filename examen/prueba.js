$(document).ready(function(){
    $("#insetarPuntos").submit(insertP)
    function insertP(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#insetarPuntos")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
        var n= document.getElementById("nombre_alumno").innerHTML; //Extrae el valor de la etiqueta
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
    alert("Eleccion incorrecto");
}

function guardando(){
    alert("guardado");
}

