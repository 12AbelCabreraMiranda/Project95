<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Números</title>
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--No funciona los iconos -->
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/numero.css">
    <script src="js/jquery-3.2.1.js"></script>
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
        <!-- NAVEGACION-->
        <header class="row encabez" >        
            <div id="atras"> 
                <a href="inicio.php" class="iconINICIO" >
                    <img src="img/inicio.png" class="img-responsive">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Aprendiendo los Números”</h1></div>
        </header>
    
        <div class="row cuerpo1">
            <div class="col-md-5 col-xs-12 vocal">
               
                <!-- VOCAL CENTRO -->
                <div class="espacioVocales">
                    <p id="numActual">0</p>
                </div>

                <div class="botones">
                    <div class="anteriorVocal" onClick="antNumero()" > <p>Anterior</p> </div>
                    <div class="siguienteVocal" onClick="sigNumero()"> <p>Siguiente</p> </div>
                </div>
            </div>

            <div class="col-md-7 col-xs-12 animal">
                <div class="animalVocal">
                    
                </div>
            </div>
        </div>        
    </div>
        <!-- funciones de JavaScript, Squery y Json-->
    <script>
        $(function(){
            listar();
        });
        var productos;
        function listar(){
                __ajax("bd/prueba1Listar.php", "")
                .done(function(info){                
                     productos = JSON.parse(info); //cambiarlo por curso despues                             
                });            
        }            
       
        //INICIALIZACION
        //$(".espacioVocales").html("<a href='#' > <img class='img-responsive' src='img/vocales/a.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function sigNumero(){ 
            var num = document.getElementById("numActual").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
           //NUMERO 1        
           if(num==0){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==42){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/uno.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 2
            if(num==1){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==43){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/dos.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }            
            //NUMERO 3
            if(num==2){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==44){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/tres.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 4
            if(num==3){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==45){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/cuatro.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            } 
            //NUMERO 5
            if(num==4){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==46){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/cinco.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }  
            //NUMERO 6
            if(num==5){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==47){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/seis.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 7
            if(num==6){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==48){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/siete.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }  
            //NUMERO 8
            if(num==7){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==49){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/ocho.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 9
            if(num==8){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==50){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/nueve.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }  
            //NUMERO 10
            if(num==9){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==51){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/diez.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }

        }    
        function antNumero(){ 
            var num = document.getElementById("numActual").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
           //NUMERO 0        
           if(num==1){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==41){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 1
            if(num==2){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==42){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/uno.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }            
            //NUMERO 2
            if(num==3){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==43){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/dos.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 3
            if(num==4){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==44){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/tres.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            } 
            //NUMERO 4
            if(num==5){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==45){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/cuatro.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }  
            //NUMERO 5
            if(num==6){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==46){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/cinco.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 6
            if(num==7){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==47){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/seis.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }  
            //NUMERO 7
            if(num==8){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==48){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/siete.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }
            //NUMERO 8
            if(num==9){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==49){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/ocho.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }  
            //NUMERO 9
            if(num==10){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==50){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/numero/nueve.jpg'> </a>");                        
                    }                                       
                }                                                                                                                                  
            }

        }        
       
        function __ajax(url, data){
            var ajax = $.ajax({
                "method": "POST",
                "url": url,
                "data": data
            })
            return ajax;
        }

    
    </script>
    <script src="js/vocales.js" ></script>
</body>
</html>
