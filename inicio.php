

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Graduacion Ing</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--No funciona los iconos -->
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/estilo_inicio.css">
    <link rel="stylesheet" href="css/estiloFrutas.css">
    <link href="https://fonts.googleapis.com/css?family=Lalezar|Racing+Sans+One" rel="stylesheet">
    
    <style>
        a{
            color:black;
        }
        td{
            color:white;
        }
    </style>

</head>
<body>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS
        session_start();
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: login/login.php");
        }
    ?>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    
    <div class="container-fluid">
        <div class="row">
             <div class="col-md-12 col-xs-12 navegacion">
                 <h1 id="tituloINICIO">“APLICACIÓN EDUCATIVA PARA EL APRENDIZAJE DEL HABLA NIVEL DE EDUCACIÓN PRE-PRIMARIA”</h1>
             </div>         
        </div>

        <!-- FILA DE CUERPO DE IMAGENES-->

        <div class="row" style="margin-top:20px">
            <!--CUERPO DE IMAGENES-->
            <aside class="col-lg-8 fondoMetodoAprendizaje " style="background:#333">
                <h3 style="text-align:center; color:white; margin-top:8px;font-family: 'Lalezar', cursive;">Método de Aprendizaje</h3>
                
                <!-- CONTENEDOR METODO DE APRENDIZAJE-->
                <div style="margin-top:20px"> 

                    <!--img 2 -->
                    <div class="col-lg-3 col-md-6 col-xs-6 img-rounded fondoIMG" style="background:#11663e;border: 1px solid rgb(245, 242, 242);">
                        <a href="vocales.php"> <img class="img-responsive imgF"  src="img/inicio/Vocales.png"></a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Vocales </p>
                    </div>
                    <!--img 3 -->
                    <div class="col-lg-3 col-md-6  col-xs-6 img-rounded  fondoIMG" style="background:#023e72;border: 1px solid rgb(245, 242, 242);">
                        <a href="abecedarios.php"> <img class="img-responsive imgF"  src="img/inicio/Abecedario.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Abecedarios </p>
                    </div>
                    <!--img 4 -->
                    <div class="col-lg-3 col-md-6 col-xs-6 img-rounded  fondoIMG" style="background:#11663e;border: 1px solid rgb(245, 242, 242);">
                        <a href="numeros.php"> <img class="img-responsive imgF"  src="img/inicio/Numero.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Números </p>
                    </div>
    
                    <!-- SEGUNDA FILA DE IMAGENES -->
    
                    <!--img 1 -->
                    <div class="col-lg-3 col-md-6 col-xs-6 img-rounded  fondoIMG" style="background:#023e72;border: 1px solid rgb(245, 242, 242);">
                        <a href="colores.php"> <img class="img-responsive imgF"  src="img/inicio/Colores.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Colores </p>
                    </div>
                    <!--img 2 -->
                    <div class="col-lg-3 col-md-6 col-xs-6 img-rounded  fondoIMG" style="background:#023e72;border: 1px solid rgb(245, 242, 242);">
                        <a href="catFrutas.php" class="img_miniatura"> <img class="img-responsive imgF"   src="img/inicio/Frutas.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Fruta </p>
                    </div>
                    <!--img 3 -->
                    <div class="col-lg-3  col-md-6 col-xs-6 img-rounded  fondoIMG" style="background:#11663e;border: 1px solid rgb(245, 242, 242);">
                        <a href="animales.php"> <img class="img-responsive imgF"  src="img/inicio/Animales.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Animales </p>
                    </div>
    
                    <!-- TERCERA FILA DE IMAGENES -->
    
                    <!--img 1 -->
                    <div class="col-lg-3 col-md-6 col-xs-6 img-rounded  fondoIMG" style="background:#023e72;border: 1px solid rgb(245, 242, 242);">
                        <a href="escuela.php"> <img class="img-responsive imgF"   src="img/inicio/Escuela.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">Escuela </p>
                    </div>
                    <!--img 2 -->
                    <div class="col-lg-3 col-md-6 col-xs-6 img-rounded  fondoIMG" style="background:#11663e;border: 1px solid rgb(245, 242, 242);">
                        <a href="cuerpoHumano.php"> <img class="img-responsive imgF"  src="img/inicio/CuerpoHumano.png"> </a>
                        <p style="text-align:center; color:honeydew; font-size:14px">El Cuerpo Humano </p>
                    </div>
                </div>

            </aside>
            <!--ESPACIO LATERAL DERECHO -->
            <div class="col-lg-4 fondo_perfil">
                <!--PERFIL -->
                <div class="col-lg-6 col-md-6 col-xs-6 fondoIMG" >
                    <a> <img class="img-responsive imgF img-rounded"  style="margin-top:5px" src="img/maestro.png"></a>                    
                    <p style="text-align:center; font-size:14px;text-transform: uppercase"> <b> <?php echo $_SESSION['u_usuario'] ?></b> </p>  
                </div>
                <!--BOTONES de ACCIONES -->
                <div class="col-lg-6 col-md-6 col-xs-6 fondoBotonesAcciones" style="background: #ffffff"> <br>
                    <!--BOTONES -->
                    <a href="RegistrarAlumnos/misAlumnos.php" class="botonesMenu"> <button class="btn btn-info btn-block">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;Registrar Alumnos</button>
                    </a>
                    <a href="misAlumnos/alumnosYcursos.php" class="botonesMenu"> <button class="btn btn-warning btn-block">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; MIS ALUMNOS</button> 
                    </a>                                                           
                    <a href="Notas/notas.php" class="botonesMenu"> <button class="btn btn-success btn-block">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp;NOTAS</button> 
                    </a>
                    <a href="login/cerrar_sesion.php" class="botonesMenu"><button class="btn btn-danger btn-block"> 
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span> &nbsp;Cerrar Sesión</button>
                    </a>                                             
                </div>

                <!-- ESPACIO DE TABLA DE EVALUACIONES-->
                <div class="col-lg-12 col-md-6 col-xs-6 fondo_cursos">   
                    
                    <div class="table-responsive" style="border-radius:5px">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <tr><td class="fondoFilaEncabezado" colspan="2" rowspan="1" style="text-align:center">EVALUACIONES DE CURSOS</td> </tr>
                            <tr>
                                <td class="fondoFilaEncabezado">CURSOS</td>
                                <td class="fondoFilaEncabezado">COMENZAR</td>                                
                            </tr>                       
                            <!-- cuerpo de la tabla-->
                            <tr>
                                <td class="fondoFila">Vocales</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen/examen_vocal.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila">Abecedarios</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_abecedario/examen_abecedario.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila"> Colores</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_colores/examen.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila">Números</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_numeros/examen.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila">Frutas</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_fruta/examen.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila">Escuela</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_escuela/examen.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila">Cuerpo Humano</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_cuerpoHumano/examen.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="fondoFila">Animales</td>
                                <td class="fondoFilaEvaluacion"> <a href="examen_animales/examen.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; &nbsp;Evaluación</a> 
                                </td>
                            </tr>                        
                        </table>                                                
                    </div>
                                                
                </div>

            </div>

        </div>
    </div>
    <!--FOOTER -->
    <div class="footers">
        <div class="izquierda" >
            <a href="#"> <img class="img-responsive casa" src="img/casa.png" > </a> <!-- style=" height:90px;width:90px"-->
        </div>
        <div class="centro">
            <a href="#"> <img class="img-responsive test" src="img/test.png"> </a>
        </div>
        <div class="derecha">
            <a href="#"> <img class="img-responsive avances"  src="img/avance.png"> </a>
        </div>
        <div class="derecha2">
            <a href="#"> <img class="img-responsive perfil" src="img/perfil.png"> </a>
        </div>
    </div>


    <!--NO DISPONIBLE PARA MOVIL, SISTEMA EN CONTRUCCIÓN -->
    <div class="noDisponibleMovil">   
        <p>Sistema aún no disponible para Móvil</p>     
        <hr> 
        <p>SITEMA EN CONSTRUCCIÓN</p>
        <a href="#"> <img class="img-responsive" src="img/tecnologia.png"> </a>
        <a href="login/cerrar_sesion.php" class="botonesMenu"><button class="btn btn-danger btn-block"> 
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span> &nbsp;Cerrar Sesión</button>
        </a> 
    </div>

</body>
</html>