$(document).ready(function(){
    $("#formDatosEstudiantes").submit(registrarAlumno)
    function registrarAlumno(evento){
        evento.preventDefault()
        //alert("funciona registro");
        $('#registradoAlumno').show(); 
        var datos = new FormData($("#formDatosEstudiantes")[0])
        $("#registradoAlumno").html("<img src='../img/cargando.gif' style='height:80px'> ")
          $.ajax({
              url: 'guardarAlumnos.php',
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $("#registradoAlumno").html(datos)
              }
          })
    }
})

//limpiar los campos de textos
function nuevoRegistro(){    
    $("#formDatosEstudiantes")[0].reset();
    $('#registradoAlumno').hide(); 
}