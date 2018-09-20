$(document).ready(function(){
    $("#guardarEstudiante").submit(guardando_alumno)
    function guardando_alumno(evento){
        evento.preventDefault()

        var idA= document.getElementById('id_estudiante');
        if( $('#id_estudiante').val() )
        {
            // AUDIO AUTOMATICO
            setTimeout(function(){
                //alert("Han pasado los tres segundos");
                var audio = document.getElementById("audio1");   
                
                audio.play();
            },2000); // 2000ms = 3s	

            //alert("funciona");
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
        }else if( !$('#id_estudiante').val()){
            //
            $.ajax({
              url: 'guardando_alumn.php',
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $("#respuesta_vacia").html(datos)
                  $('#form2').hide();
                  $('#contenedor_vacio').show();
                          // AUDIO AUTOMATICO
                              setTimeout(function(){
                                  //alert("Han pasado los tres segundos");
                                  var audio = document.getElementById("audio1");   
                                  
                                  audio.pause();//PERMITE PAUSAR EL AUDIO QUE IBA A SONAR
                              },2000); // 2000ms = 3s
                  
              }
          })
            //
        }


    }
})