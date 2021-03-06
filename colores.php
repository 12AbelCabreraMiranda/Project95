<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colores</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--No funciona los iconos -->
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/estilo_inicio.css">
    <link rel="stylesheet" href="css/estiloFrutas.css">

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
    <header class="row encabez">
            <div id="atras">
                <a href="inicio.php" class="iconINICIO" >
                    <img src="img/inicio.png" class="img-responsive" alt="">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">"Conociendo Los Colores"</h1></div>
        </header>

        <!-- FILA DE CUERPO DE IMAGENES-->

        <div class="row" style="margin-top:100px">
            <!--CUERPO DE IMAGENES-->
            <aside class="col-lg-8 fond col-lg-offset-2" >

                <!--img 2 -->
                
                <div onmousedown='voz1.play()' class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:white;cursor:pointer;margin-top:15px;border: 2px solid #2b2b2a" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:black" class="nombColor"> Blanco </p>
                    <center>
                        <h1>
                            <span style="color:#015c87" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>
                <!--img 3 -->
                <div onmousedown='voz2.play()' class="col-lg-3 col-md-6  col-xs-6 fondoIMG img-rounded" style="background:blue;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew"class="nombColor">Azul </p>
                    <center>
                        <h1>
                            <span style="color:white" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>
                <!--img 4 -->
                <div onmousedown='voz3.play()' class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#e20022;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew"class="nombColor">Rojo </p>
                    <center>
                        <h1>
                            <span style="color:white" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>

                <!-- SEGUNDA FILA DE IMAGENES -->

                <!--img 1 -->
                <div onmousedown='voz4.play()' class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#016d25;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew"class="nombColor">Verde </p>
                    <center>
                        <h1>
                            <span style="color:white" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>
                <!--img 2 -->
                <div onmousedown='voz5.play()' class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#f7de00;cursor:pointer;margin-top:10px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:black"class="nombColor">Amarillo </p>
                    <center>
                        <h1>
                            <span style="color:black" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>
                <!--img 3 -->
                <div onmousedown='voz6.play()' class="col-lg-3  col-md-6 col-xs-6 fondoIMG img-rounded" style="background:black;cursor:pointer;margin-top:10px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew"class="nombColor">Negro </p>
                    <center>
                        <h1>
                            <span style="color:white" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>

                <!-- TERCERA FILA DE IMAGENES -->

                <!--img 1 -->
                <div onmousedown='voz7.play()' class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#422020;cursor:pointer;margin-top:10px " onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew"class="nombColor">Café </p>
                    <center>
                        <h1>
                            <span style="color:white" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>
                <!--img 2 -->
                <div onmousedown='voz8.play()' class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#e80b7d;cursor:pointer;margin-top:10px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew"class="nombColor">Rosado </p>
                    <center>
                        <h1>
                            <span style="color:white" class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                        </h1>
                    </center>
                </div>

            </aside>

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

    <!--NO DISPONIBLE PARA MOVIL, SISTEMA EN CONTRUCCIÓN -->
    <div class="noDisponibleMovil">   
        <p>Sistema aún no disponible para Móvil</p>    
        <hr> 
        <p>SITEMA EN CONSTRUCCIÓN</p>
        <a href="#"> <img class="img-responsive" src="img/tecnologia.png"> </a>
    </div>


    <script src="js/audios/colores_audio.js"></script>
</body>
</html>