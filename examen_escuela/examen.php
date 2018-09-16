<?php
    require('..//bd/conexion.php');
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];

    $id;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $id =$row['id_maestroU'];
     }

    $query = "select idEstudiante, nombre,codigoEstudiante from estudiante WHERE id_usuario_maestro='$id' ";
    $resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen Escuela</title>
    <script src="../js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--No funciona los iconos -->
    <script src="../js/bootstrap.min.js" ></script>    
    
    <link rel="stylesheet" href="../css/estilo_examenes.css">
    

</head>
<body>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS        
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: ../login/login.php");  
        }
    ?>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->

    <div class="container-fluid">
        <!-- Fila Encabezado-->
        <header class="row encabez" >        
            <div id="atras"> 
                <a href="../inicio.php" class="iconINICIO" >
                    <img src="../img/inicio.png" class="img-responsive" alt="">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Escuela”</h1></div>
        </header>

        <!-- FILA DE CUERPO DE IMAGENES-->

        <div class="row" style="margin-top:100px">

            <!-- AUDIOS-->
            <audio style="display: none" id="audio1" controls>
                <source type="audio/mp3" src="../audio/escuela/cualeslasacapunta.mp3">
            </audio>
            <audio style="display: none" id="audio2" controls>
                <source type="audio/mp3" src="../audio/escuela/cualeslamaestra.mp3">
            </audio>
            <audio style="display: none" id="audio3" controls>
                <source type="audio/mp3" src="../audio/escuela/cualeslatijera.mp3">
            </audio>
            <audio style="display: none" id="audio4" controls>
                <source type="audio/mp3" src="../audio/escuela/cualeselcuaderno.mp3">
            </audio>
            <audio style="display: none" id="audio5" controls>
                <source type="audio/mp3" src="../audio/escuela/cualeselapiz.mp3">
            </audio>

            <!--CUERPO DE IMAGENES-->
            <aside class="col-lg-12 " style="background:white; height:500px">
                <!--FORM PARA GUARDAR EL ESTUDIANTE PARA LA EVALUACIÓN-->
                <form action="examen.php" method="post" id="guardarEstudiante" enctype="multipart/form-data" style="margin-top:10px">                                                          
                        <div class="col-md-12" style="color:black"> Estudiante
                            <select name="elegir" style="color:black; width:150px; border-radius:5px"  id="id_estudiante">
                            <?php while($row = $resultado->fetch_assoc()){  ?>
                            <option class="col-md-12" value="<?php echo $row['idEstudiante']; ?> ">
                                <?php  echo $row['nombre']; ?> 
                                <?php  echo $row['codigoEstudiante']; ?>
                            </option>
                            <?php }?>
                            </select> 
                            <button onclick="guardando_alumno()" class="btn btn-warning">Guardar</button>
                        </div>                        
                </form>                
            <!--  .................BOTONES CON IMAGENES................................................... -->
                
                <!--IMAGEN - INCORRECTO 1-->
                <div class="row" id="incorrecto1">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/incorrecto.png"> 
                        <!--BOTON SIGUIENTE-->
                        <center>
                        <a href="#"> <button onclick="NextForm2()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center>
                    </div>         
                </div>

                <!--IMAGEN - INCORRECTO 2-->
                <div class="row" id="incorrecto2">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/incorrecto.png"> 
                        <!--BOTON SIGUIENTE-->
                        <center>
                        <a href="#"> <button onclick="NextForm3()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center>
                    </div>         
                </div>

                <!--IMAGEN - INCORRECTO 3-->
                <div class="row" id="incorrecto3">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/incorrecto.png"> 
                        <!--BOTON SIGUIENTE-->
                        <center>
                        <a href="#"> <button onclick="NextForm4()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center> 
                    </div>         
                </div>

                <!--IMAGEN - INCORRECTO 4-->
                <div class="row" id="incorrecto4">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/incorrecto.png"> 
                        <!--BOTON SIGUIENTE-->
                        <center>
                        <a href="#"> <button onclick="NextForm5()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center> 
                    </div>         
                </div>

                <!--IMAGEN - INCORRECTO 5-->
                <form action="examen.php" method="POST" id="form_puntos" class="insetarPuntos" enctype="multipart/form-data">
                    <p class="nombre_alumno" ></p> 
                    <div class="row" id="incorrecto5">
                        <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                            <input type="image" class="img-responsive" src="../img/incorrecto.png"> 
                            <!--BOTON SIGUIENTE--> 
                            <center>
                                <input type="image" onclick="verPuntos()" class="btn  btn-warning dedo" src="../img/siguiente.png">
                            </center>                           
                        </div>  
                               
                    </div>
                </form>

                <!--IMAGEN CORRECTO 1-->
                <div class="row" id="mostrar_correcto">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/correcto.png"> 
                        <center>
                        <a href="#"> <button  onclick="siguienteForm()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center>
                    </div>         
                </div>

                <!--IMAGEN CORRECTO 2-->
                <div class="row" id="mostrar_correcto2">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/correcto.png"> 
                        <center>
                        <a href="#"> <button  onclick="siguienteForm3()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center>
                    </div>         
                </div>

                <!--IMAGEN CORRECTO 3-->
                <div class="row" id="mostrar_correcto3">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/correcto.png"> 
                        <center>
                        <a href="#"> <button  onclick="siguienteForm4()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center>
                    </div>         
                </div>

                <!--IMAGEN CORRECTO 4-->
                <div class="row" id="mostrar_correcto4">
                    <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                        <input type="image" class="img-responsive" src="../img/correcto.png"> 
                        <center>
                        <a href="#"> <button  onclick="siguienteForm5()" class="btn btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                        </center>
                    </div>         
                </div>

                <!--IMAGEN CORRECTO 5 FINAL-->
                <form action="examen.php" method="POST" id="form_puntos_correctos" class="insetarPuntos" enctype="multipart/form-data">
                    <p class="nombre_alumno" ></p> 
                    <div class="row" id="mostrar_correcto5">
                        <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                            <input type="image" class="img-responsive" src="../img/correcto.png"> 
                            
                            <!--BOTON SIGUIENTE--> 
                            <center>
                                <input type="image" onclick="siguienteForm6()" class="btn  btn-warning dedo" src="../img/siguiente.png">
                            </center>                                                                                                                             
                        </div>         
                    </div>
                </form>



                <!-- .................RESPUESTE DE LA BASE DE DATOS SI TODO FUE EXITOSAMENTE................... -->
                <!--<center>
                    <div id="respuesta">
                        <!- Aqui muestra el resultado si fue exito en la base de datos->
                    </div>
                </center>-->
                
                <div class="row" id="fondo_puntos" >
                    <div class="col-lg-3 col-lg-offset-4 text-center " id="estilo_puntos" style="height: 300px"> 
                        <h1>Total de Puntos</h1>
                        <p id="respuesta_puntos" style="font-size:140px"></p>
                    </div>
                </div>

                <!-- .................FORM DE IMAGENES................... -->

                <!--SEGUNDO FORMULARIO PRIMERA LISTA DE IMAGENES-->
                <form action="examen.php" method="POST" id="form2" class="insetarPuntos" enctype="multipart/form-data">
                    <div > <!-- type="hidden" id="nombre_alumno"-->
                        <p class="nombre_alumno" ></p>                            
                    </div>
                                       
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <div> <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno2" style="text-align:center; font-size:27px"></p>                            
                            <h1 onmousedown='voz1.play()' style="text-align:center; color:black;cursor:pointer">
                                Cuál es la Sacapuntas &nbsp; &nbsp; <span style="color:#015c87" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                            </h1>
                        </div>                                                                                                                        
                        <!--img CORRECTO -->                        
                        <div onmousedown='voz6.play()'  onclick="insertP()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                
                            <input type="image" class="img-responsive imgF" src="../img/Escuela/sacapuntas.png">                                                                                                                                
                        </div>                             
                        <!--img 3 --> 
                        <div onmousedown='voz7.play()' onClick="incorrecto1()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/CuerpoHumano/boca.png"> </a>                            
                        </div>
                        <!--img 4 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto1()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/manzanaVerde.png"> </a>                                                 
                        </div> 
                          
                        <!--img 2 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto1()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/lapiz.png"> </a>                        
                        </div> 
                        

                    </div>
                </form>

                <!--TERCER FORMULARIO SEGUNDA LISTA DE IMAGENES-->
                <form action="examen.php" method="POST" id="form3" class="insetarPuntos" enctype="multipart/form-data">
                    <div> <!-- type="hidden" id="nombre_alumno"-->
                        <p class="nombre_alumno"></p>                            
                    </div>
                    
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <div> <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno2" style="text-align:center; font-size:27px"></p>                            
                            <h1 onmousedown='voz2.play()' style="text-align:center; color:black;cursor:pointer">
                                Cuál es la Maestra &nbsp; &nbsp; <span style="color:#015c87" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                            </h1>
                        </div>
                        <!-- <center><div id="respuesta"></div></center> -->                                                                                                                                                 
                        <!--img 2 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto2()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/Zapote.png"> </a>                            
                        </div>
                        <!--img 4 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto2()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/numero/10.png"> </a>                                                        
                        </div> 
                        <!--img 1 -->                        
                        <div onmousedown='voz7.play()' onClick="incorrecto2()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                                            
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/dulce/mango.png"> </a>                                                                                                                                                         
                        </div>  
                        <!--img 3 CORRECTO --> 
                        <div onmousedown='voz6.play()' onClick="insertP2()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <input type="image" class="img-responsive imgF" src="../img/Escuela/maestra.png">                                                                             
                        </div>  
                    </div>
                </form>

                <!--CUARTO FORMULARIO TERCERA LISTA DE IMAGENES-->
                <form action="examen.php" method="POST" id="form4" class="insetarPuntos" enctype="multipart/form-data">
                    <div> <!-- type="hidden" id="nombre_alumno"-->
                        <p class="nombre_alumno"></p>                            
                    </div>
                    
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <div> <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno2" style="text-align:center; font-size:27px"></p>                            
                            <h1 onmousedown='voz3.play()' style="text-align:center; color:black;cursor:pointer">
                                Cual es el la Tijera &nbsp; &nbsp; <span style="color:#015c87" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                            </h1>
                        </div>
                        <!-- <center><div id="respuesta"></div></center> -->                      

                        <!--img 1 -->                        
                        <div onmousedown='voz7.play()'  onclick="incorrecto3()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                                            
                            <a href="#"> <img class="img-responsive imgF"src="../img/numero/5.png"> </a>                                                                                                                                                       
                        </div>                                                                             
                        <!--img 2 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto3()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/fruta_acida/cacao.png"> </a>                                                         
                        </div> 
                        <!--img 4 CORRECTO -->
                        <div onmousedown='voz6.play()' onClick="insertP3()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)"> 
                            <input type="image" class="img-responsive imgF" src="../img/Escuela/tijera.png">                          
                        </div>                        
                        <!--img 3  --> 
                        <div onmousedown='voz7.play()' onClick="incorrecto3()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">                            
                            <a href="#"> <img class="img-responsive imgF"src="../img/vocales/aa.png"> </a>                                                      
                        </div>
                         
                          
                                                                           
                    </div>
                </form>
                
                <!--QUINTO FORMULARIO CUARTA LISTA DE IMAGENES-->
                <form action="examen.php" method="POST" id="form5" class="insetarPuntos" enctype="multipart/form-data">
                    <div> <!-- type="hidden" id="nombre_alumno"-->
                        <p class="nombre_alumno"></p>                            
                    </div>
                    
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <div> <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno2" style="text-align:center; font-size:27px"></p>                            
                            <h1 onmousedown='voz4.play()' style="text-align:center; color:black;cursor:pointer">
                                Cual es el Cuaderno &nbsp; &nbsp; <span style="color:#015c87" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                            </h1>
                        </div>
                        <!-- <center><div id="respuesta"></div></center> -->                      
                        <!--img 1 -->                        
                        <div onmousedown='voz7.play()'  onclick="incorrecto4()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                                         
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/borrador.png"> </a>                                                                                                                                                           
                        </div>  
                        <!--img 2 CORRECTO-->
                        <div onmousedown='voz6.play()' onClick="inserbtP4()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">                     
                            <input type="image" class="img-responsive imgF" src="../img/Escuela/cuaderno.png">                             
                        </div>                                                   
                            
                        <!--img 3  --> 
                        <div onmousedown='voz7.play()' onClick="incorrecto4()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">                             
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/Guayaba.png"> </a>                                                    
                        </div>
                        
                        <!--img 4 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto4()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/crayon.png"> </a>                                                         
                        </div>                                                       
                    </div>
                </form>

                <!--SEXTO FORMULARIO QUINTA LISTA DE IMAGENES-->
                <form action="examen.php" method="POST" id="form6" class="insetarPuntos" enctype="multipart/form-data">
                    <div> <!-- type="hidden" id="nombre_alumno"-->
                        <p class="nombre_alumno"></p>                            
                    </div>
                    
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <div> <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno2" style="text-align:center; font-size:27px"></p>                            
                            <h1 onmousedown='voz5.play()' style="text-align:center; color:black;cursor:pointer">
                                Cual es el Lápiz &nbsp; &nbsp; <span style="color:#015c87" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                            </h1>
                        </div>
                        <!-- <center><div id="respuesta"></div></center> -->                                                                               
                        <!--img 1 -->                        
                        <div onmousedown='voz7.play()' onclick="incorrecto5()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                                            
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/crayon.png"> </a>                                                                                                                                                          
                        </div>                                                     
                         
                        <!--img 2 -->
                        <div onmousedown='voz7.play()' onClick="incorrecto5()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/mochila.png"> </a>                                                     
                        </div>
                        <!--img 4 CORRECTO-->
                        <div onmousedown='voz6.play()' onClick="inserbtP5()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">                            
                            <input type="image" class="img-responsive imgF" src="../img/Escuela/lapiz.png">                                                          
                        </div>
                        <!--img 3  --> 
                        <div onmousedown='voz7.play()' onClick="incorrecto5()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">                            
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/regla.png"> </a>                                                     
                        </div>
                                                                            
                    </div>
                </form>

            </aside>
        </div>
    </div>

    <div class="footers">
        <div class="izquierda" >
            <a href="inicio.php"> <img class="img-responsive casa" src="../img/casa.png" style=" height:90px;width:90px"> </a>
        </div>
        <div class="centro">
            <a href=""> <img class="img-responsive test" src="../img/test.png" style=" height:90px;width:90px"> </a>
        </div>
        <div class="derecha">
            <a href=""> <img class="img-responsive avances" src="../img/avance.png" style=" height:85px;width:85px"> </a>
        </div>
        <div class="derecha2">
            <a href=""> <img class="img-responsive perfil" src="../img/perfil.png" style=" height:85px;width:85px"> </a>
        </div>
    </div>
<script  src="prueba.js">    
</script>
<script src="guardando_alumno.js"></script>
<script src="audios.js"></script>

</body>
</html>