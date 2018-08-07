$(document).ready(function(){
    $("#insertar-pelicula").submit(insertarPelicula)
    function insertarPelicula(evento){
        evento.preventDefault()
        //alert("funciona");
        var datos = new FormData($("#insertar-pelicula")[0])
        $("#respuesta").html("<img src='img/cargando.gif' style='height:80px'> ")
          $.ajax({
              url: 'imgGuardar.php',
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

