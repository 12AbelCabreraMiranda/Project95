<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vocales</title>
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--No funciona los iconos -->
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/vocales.css">
    <script src="js/jquery-3.2.1.js"></script>
</head>
<body>
    <div class="container-fluid">
        <!-- NAVEGACION-->
        <header class="row encabez" >        
            <div id="atras"> 
                <a href="inicio.php" class="iconINICIO" >
                    <img src="img/inicio.png" class="img-responsive">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Aprendiendo las Vocales”</h1></div>
        </header>
    
        <div class="row cuerpo1">
            <div class="col-md-5 col-xs-12 vocal">
                <div class="espacioVocales">
                    <a href="#" > <img class="img-responsive"  src="img/vocales/a.png"> </a> 
                </div>

                <div class="botones">
                    <div class="anteriorVocal" onClick="antVocal()" > <p>Anterior</p> </div>
                    <div class="siguienteVocal" onClick="sigVocal()"> <p>Siguiente</p> </div>
                </div>
            </div>

            <div class="col-md-7 col-xs-12 animal">
                <div class="animalVocal">
                    <a href="#" > <img class="img-responsive"  src="img/vocales/abeja.png"> </a>
                </div>
            </div>
        </div>
        


    </div>
    <script src="js/vocales.js" ></script>
</body>
</html>
