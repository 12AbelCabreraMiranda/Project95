$(document).ready(function(){
    $("#insetarPuntos").submit(insertP)
    function insertP(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#insetarPuntos")[0])
        $("#respuesta").html("<img src='../img/cargando.gif' style='height:80px'> ")
          $.ajax({
              url: 'prueba.php',
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
