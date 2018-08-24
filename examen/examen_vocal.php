<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat. Frutas</title>
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
                <form action="examen_vocal.php" method="POST" id="insetarPuntos" enctype="multipart/form-data">

                    <label > ALumno: </label>      <!--type="hidden"-->                   
                        <input  name="alumnoCurso" value="<?php echo $nombres = $_POST['elegir']; ?>">
                    <div class="espacioFrutas" >

                        <h1 style="text-align:center; color:black">cual es la letra A</h1>

                        <center>
                            <div id="respuesta"  >
                            </div>
                        </center>

                        <!--img 1 -->                        
                        <div  class="col-lg-3 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(76, 55, 54)">                                                
                            <input  name ='ItemPurchase' type="image" class="img-responsive imgF" src="../img/vocales/a.png">                                              
                            <!-- <input type="checkbox" name="vehicle" value="Bike"> click<br>--> 
                            <input onclick="insertP()" type="submit" value="Insertar Puntos" class="form-control">
                        </div>     
                        
                        




    
                        <!--img 2 -->
                        <div onClick="probando()" class="col-lg-3 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/frutas/FRUTA_ACIDO.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Frutas Ácidas </p>
                        </div>
                        <!--img 3 --> 
                        <div class="col-lg-3 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/animales/zorro.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Zorro </p>
                        </div>
                        <!--img 4 -->
                        <div class="col-lg-3 col-sm-3 col-md-6 col-xs-6 " style="background:rgb(25, 44, 61)">
                            <a href="#"> <img class="img-responsive imgF"src="../img/Escuela/lapiz.png"> </a>
                            <p style="text-align:center; color:honeydew; font-size:15px">Numero 5 </p>
                        </div>                                                       
                    </div>
                </form>
                
                <a href="#"> <button class="btn btn-block btn-warning"> Siguiente </button></a>
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

</body>
</html>