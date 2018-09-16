$(document).ready(function(){
    $("#guardarEstudiante").submit(guardando_alumno)
    function guardando_alumno(evento){
        evento.preventDefault()
        //alert("funciona");

        // AUDIO AUTOMATICO
        setTimeout(function(){
            var audio = document.getElementById("audio1");               
            audio.play();
        },2000); // 2000ms = 3s	


        var datos = new FormData($("#guardarEstudiante")[0])
        $(".nombre_alumno").html("<img src='../img/cargando.gif' style='height:80px'> ")
          $.ajax({
              url: 'guardando_alumn.php',
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $(".nombre_alumno").html(datos)
              }
          })
          //
          $.ajax({
            url: 'select_alumno.php',
            type: 'POST',
            data: datos,
            contentType: false, //se anota porque se mandarán archivos
            processData: false,
            success: function(datos){
                $(".nombre_alumno2").html(datos)
            }
        })
          //
    }
})