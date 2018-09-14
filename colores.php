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
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">Los Colores</h1></div>
        </header>

        <!-- FILA DE CUERPO DE IMAGENES-->

        <div class="row" style="margin-top:100px">
            <!--CUERPO DE IMAGENES-->
            <aside class="col-lg-8 fond col-lg-offset-2" style="background:#333">

                <!--img 2 -->
                
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:white;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:black; font-size:14px">Blanco </p>
                </div>
                <!--img 3 -->
                <div class="col-lg-3 col-md-6  col-xs-6 fondoIMG img-rounded" style="background:blue;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew; font-size:14px">Azul </p>
                </div>
                <!--img 4 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:red;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew; font-size:14px">Rojo </p>
                </div>

                <!-- SEGUNDA FILA DE IMAGENES -->

                <!--img 1 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:green;cursor:pointer;margin-top:15px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew; font-size:14px">Verde </p>
                </div>
                <!--img 2 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:yellow;cursor:pointer;margin-top:10px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:black; font-size:14px">Amarillo </p>
                </div>
                <!--img 3 -->
                <div class="col-lg-3  col-md-6 col-xs-6 fondoIMG img-rounded" style="background:black;cursor:pointer;margin-top:10px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew; font-size:14px">Negro </p>
                </div>

                <!-- TERCERA FILA DE IMAGENES -->

                <!--img 1 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#422020;cursor:pointer;margin-top:10px " onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew; font-size:14px">Café </p>
                </div>
                <!--img 2 -->
                <div class="col-lg-3 col-md-6 col-xs-6 fondoIMG img-rounded" style="background:#e80b7d;cursor:pointer;margin-top:10px" onclick="nombreFuncion()">                    
                    <p style="text-align:center; color:honeydew; font-size:14px">Rosado </p>
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

</body>
</html>