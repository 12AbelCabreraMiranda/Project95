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
    

</head>
<body>
    <div class="container-fluid">
        <!-- Fila Encabezado-->
        <header class="row">        
            <div id="encabezadoFruta" class="col-lg-12 col-md-9 col-sm-8 col-xs-12" ><h1 id="TituloFrutasDulces">“Clasificación de Frutas"</h1></div>
        </header>

        <!-- FILA DE CUERPO DE IMAGENES-->

        <div class="row" style="margin-top:20px">
            <!--CUERPO DE IMAGENES-->
            <aside class="col-lg-12 " style="background:#333; height:500px">

                <!--img 2 -->
                <div  class="col-lg-2 col-sm-3 col-md-6 col-xs-6 col-lg-offset-2 " style="background:rgb(76, 55, 54);height:230px">
                    <a href="frutas.php"> <img class="img-responsive imgF" src="img/frutas/FRUTA_DULCE.png"></a>
                    <p style="text-align:center; color:honeydew; font-size:15px">Frutas Dulces </p>
                </div>
                <!--img 3 -->
                <div class="col-lg-2 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(55, 91, 128);height:230px">
                    <a href="#"> <img class="img-responsive imgF"src="img/frutas/FRUTA_ACIDO.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:15px">Frutas Ácidas </p>
                </div>
                <!--img 4 -->
                <div class="col-lg-2 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(25, 44, 61);height:230px">
                    <a href="#"> <img class="img-responsive imgF " src="img/frutas/FRUTA_SEMIACIDO.jpg"> </a>
                    <p style="text-align:center; color:honeydew; font-size:15px">Frutas SemiÁcidas </p>
                </div>
                <!--img 5 -->
                <div class="col-lg-2 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(76, 55, 54);height:230px">
                    <a href="#"> <img class="img-responsive imgF" src="img/frutas/FRUTA_NEUTRO.png"> </a>
                    <p style="text-align:center; color:honeydew; font-size:15px">Frutas Neutras </p>
                </div>
            
        
            </aside>
        </div>

    </div>

    <div class="footers">
        <div class="izquierda" >
            <a href="inicio.html"> <img class="img-responsive casa" src="img/casa.png" style=" height:90px;width:90px"> </a>
        </div>
        <div class="centro">
            <a href=""> <img class="img-responsive test" src="img/test.png" style=" height:90px;width:90px"> </a>
        </div>
        <div class="derecha">
            <a href=""> <img class="img-responsive avances" src="img/avance.png" style=" height:85px;width:85px"> </a>
        </div>
        <div class="derecha2">
            <a href=""> <img class="img-responsive perfil" src="img/perfil.png" style=" height:85px;width:85px"> </a>
        </div>
    </div>

</body>
</html>