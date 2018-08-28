<?php
    require('..//bd/conexion.php');
    $query = "select idEstudiante, nombre from estudiante";
    $resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen Vocal</title>
    <script src="../js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--No funciona los iconos -->
    <script src="../js/bootstrap.min.js" ></script>    
    
    <link rel="stylesheet" href="../css/estilo_examenes.css">
    

</head>
<body>
    <div class="container-fluid">
        <!-- Fila Encabezado-->
        <header class="row encabez" >        
            <div id="atras"> 
                <a href="../inicio.php" class="iconINICIO" >
                    <img src="../img/inicio.png" class="img-responsive" alt="">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Vocal”</h1></div>
        </header>

        <!-- FILA DE CUERPO DE IMAGENES-->

        <div class="row" style="margin-top:100px">
            <!--CUERPO DE IMAGENES-->
            <aside class="col-lg-12 " style="background:white; height:500px">
                <form action="examen_vocal.php" method="post" id="guardarEstudiante" enctype="multipart/form-data">                    
                        <label > ALumno: </label>      <!--type="hidden"  $id=$_REQUEST['id'];-->                                           
                        <div class="col-md-12" style="color:white"> Estudiante
                            <select name="elegir" style="color:black; width:150px; border-radius:5px"  id="id_estudiante">
                            <?php while($row = $resultado->fetch_assoc()){  ?>
                            <option class="col-md-12" value="<?php echo $row['idEstudiante']; ?> ">
                            <?php  echo $row['nombre']; ?> </option>
                            <?php }?>
                            </select> 
                            <button onclick="guardando_alumno()" class="btn btn-warning">Guardar</button>
                        </div>                        
                </form>


                 <!--IMAGEN CORRECTO-->
                        <div class="row" id="mostrar_correcto">
                            <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                                <input type="image" class="img-responsive" src="../img/correcto.png"> 
                                <a href="#"> <button class="btn btn-block btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                            </div>         
                        </div>
                        <div class="row" id="mostrar_incorrecto">
                            <div class="col-lg-3 col-lg-offset-4" style="height: 380px">                                                
                                <input type="image" class="img-responsive" src="../img/incorrecto.png"> 
                                <a href="#"> <button onclick="mostrar()" class="btn btn-block btn-warning "> <img class="img-responsive dedo" src="../img/siguiente.png"></button>  </a>                                                                                                                            
                            </div>         
                        </div>
                                   
                <!--SEGUNDO FORMULARIO PRIMERA LISTA DE IMAGENES-->
                <form action="examen_vocal.php" method="POST" class="insetarPuntos" enctype="multipart/form-data">
                    <div > <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno"></p>                            
                    </div>
                    
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <h1 style="text-align:center; color:black">cual es la letra A</h1>
                        <center>
                            <div id="respuesta">

                            </div>
                        </center>                       

                        <!--img correcto -->                        
                        <div  onclick="inserbtP()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                
                            <input type="image" class="img-responsive imgF" src="../img/examen/vocal/aa.png">                                                                                                                                
                        </div>                                                     
    
                        <!--img 2 -->
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/FRUTA_ACIDO.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Frutas Ácidas </p>
                        </div>
                        <!--img 3 --> 
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/animales/zorro.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Zorro </p>
                        </div>
                        <!--img 4 -->
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/lapiz.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Numero 5 </p>
                        </div>                                                       
                    </div>
                </form>

                <!--TERCER FORMULARIO PRIMERA LISTA DE IMAGENES-->
                <form action="examen_vocal.php" method="POST" class="insetarPuntos" enctype="multipart/form-data">
                    <div > <!-- type="hidden" id="nombre_alumno"-->
                            <p class="nombre_alumno"></p>                            
                    </div>
                    
                    <!--kaki va la lista --> 
                    <div class="espacioFrutas" >
                        <h1 style="text-align:center; color:black">cual es la letra A</h1>
                        <center>
                            <div id="respuesta">

                            </div>
                        </center>                       

                        <!--img correcto -->                        
                        <div  onclick="inserbtP()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal " style="background:rgb(76, 55, 54)">                                                
                            <input type="image" class="img-responsive imgF" src="../img/examen/vocal/aa.png">                                                                                                                                
                        </div>                                                     
    
                        <!--img 2 -->
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/FRUTA_ACIDO.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Frutas Ácidas </p>
                        </div>
                        <!--img 3 --> 
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/animales/zorro.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Zorro </p>
                        </div>
                        <!--img 4 -->
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 fondo_image_vocal" style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/lapiz.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Numero 5 </p>
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

</body>
</html>