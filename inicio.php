

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
            <aside class="col-lg-8 fond " style="background:#333">
                <h3 style="text-align:center; color:white; margin-top:8px">Método de Aprendizaje</h3>
                <!--img 2 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG" style="background:rgb(25, 44, 61)">
                    <a href="vocales.php"> <img class="img-responsive imgF"  src="img/inicio/Vocales.png"></a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Vocales </p>
                </div>
                <!--img 3 -->
                <div class="col-lg-3 col-md-6  col-xs-6 fondoIMG" style="background:rgb(76, 55, 54)">
                    <a href="abecedarios.php"> <img class="img-responsive imgF"  src="img/inicio/Abecedario.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Abecedarios </p>
                </div>
                <!--img 4 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG" style="background:rgb(11, 21, 66)">
                    <a href="numeros.php"> <img class="img-responsive imgF"  src="img/inicio/Numero.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Números </p>
                </div>

                <!-- SEGUNDA FILA DE IMAGENES -->

                <!--img 1 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG" style="background:rgb(20, 19, 12)">
                    <a href="colores.php"> <img class="img-responsive imgF"  src="img/inicio/Colores.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Colores </p>
                </div>
                <!--img 2 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG" style="background:rgb(46, 20, 3)">
                    <a href="catFrutas.php" class="img_miniatura"> <img class="img-responsive imgF"   src="img/inicio/Frutas.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Fruta </p>
                </div>
                <!--img 3 -->
                <div class="col-lg-3  col-md-6 col-xs-6 fondoIMG" style="background:rgb(105, 3, 3)">
                    <a href="animales.php"> <img class="img-responsive imgF"  src="img/inicio/Animales.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Animales </p>
                </div>

                <!-- TERCERA FILA DE IMAGENES -->

                <!--img 1 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG" style="background:rgba(55, 82, 109)">
                    <a href="escuela.php"> <img class="img-responsive imgF"   src="img/inicio/Escuela.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">Escuela </p>
                </div>
                <!--img 2 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG" style="background:rgb(10, 59, 27)">
                    <a href="cuerpoHumano.php"> <img class="img-responsive imgF"  src="img/inicio/CuerpoHumano.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:14px">El Cuerpo Humano </p>
                </div>
            </aside>
            <!--PERFIL -->
            <div class="col-lg-4 fondo_perfil">
                <div class="col-lg-6 col-md-6 col-xs-6 fondoIMG" style="background:rgb(25, 44, 61)">
                    <a> <img class="img-responsive imgF img-circle"  src="img/maestro.png"></a>                    
                    <p style="text-align:center; color:honeydew; font-size:14px"><?php echo $_SESSION['u_usuario'] ?></p>  
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6 fondoIMG" style="background: #ffffff"> <br>
                    <a href="RegistrarAlumnos/misAlumnos.php"> <button class="btn btn-info btn-block">Registrar Alumnos</button></a>  <br>
                    <a href="misAlumnos/alumnosYcursos.php"> <button class="btn btn-warning btn-block">MIS ALUMNOS</button> </a>   <br>                                                            
                    <a href="Notas/notas.php"> <button class="btn btn-success btn-block">NOTAS</button> </a>
                    <a href="login/cerrar_sesion.php">Cerrar Sesión</a>                                               
                </div>
                <div class="col-lg-12 col-md-6 col-xs-6 fondo_cursos" style="background: #8e8d8d">   
                    <h4>Evaluaciones</h4>
                    <table>
                        <tr>
                            <td>CURSOS</td>
                            <td>COMENZAR</td>                                
                        </tr>                       
                        <!-- cuerpo de la tabla-->
                        <tr>
                            <td>Vocales</td>
                            <td> <a href="examen/examen_vocal.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Abecedarios</td>
                            <td> <a href="examen_abecedario/examen_abecedario.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Colores</td>
                            <td> <a href="examen_colores/examen.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Números</td>
                            <td> <a href="examen_numeros/examen.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Frutas</td>
                            <td> <a href="examen_fruta/examen.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Escuela</td>
                            <td> <a href="examen_escuela/examen.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Cuerpo Humano</td>
                            <td> <a href="examen_cuerpoHumano/examen.php">Evaluación</a> </td>
                        </tr>
                        <tr>
                            <td>Animales</td>
                            <td> <a href="examen_animales/examen.php">Evaluación</a> </td>
                        </tr>                        
                    </table>                                                
                                                
                </div>
            </div>

        </div>
    </div>

    <div class="footers">
        <div class="izquierda" >
            <a href="inicio.html"> <img class="img-responsive casa" src="img/casa.png" > </a> <!-- style=" height:90px;width:90px"-->
        </div>
        <div class="centro">
            <a href=""> <img class="img-responsive test" src="img/test.png"> </a>
        </div>
        <div class="derecha">
            <a href=""> <img class="img-responsive avances"  src="img/avance.png"> </a>
        </div>
        <div class="derecha2">
            <a href=""> <img class="img-responsive perfil" src="img/perfil.png"> </a>
        </div>
    </div>

</body>
</html>