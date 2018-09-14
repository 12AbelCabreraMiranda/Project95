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
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    
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
        <header class="row encabez">        
            <div id="atras">
                <a href="inicio.php" class="iconINICIO">
                    <img src="img/inicio.png" class="img-responsive">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces" style="font-family: 'Francois One', sans-serif;">“Aprendiendo las Vocales”</h1></div>
        </header>
    
        <div class="row cuerpo1">
            <div class="col-md-5 col-xs-12 vocal" style="cursor:pointer" onclick="escucharVocal()">
                <div class="tam_miniatura">
                    <p class="view_vocal" id="vocalActual">a</p>
                </div>
                <!-- VOCAL CENTRO -->
                <div class="espacioVocales">
                    <!--<a href="#" > <img class="img-responsive"  src="img/vocales/a.png"> </a> -->
                </div>

                <div class="botones">
                    <div class="anteriorVocal" onClick="antVocal()" > 
                        <p><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Anterior</p> 
                    </div>
                    <div class="siguienteVocal" onClick="sigVocal()"> 
                        <p>Siguiente&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></p> 
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-xs-12 animal" style="cursor:pointer" onclick="escucharVocalAnimal()">
                <div class="animalVocal">
                    <a href="#" > <img class="img-responsive"  src="img/vocales/abeja.png"> </a>
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
        $(".espacioVocales").html("<a href='#' > <img class='img-responsive' src='img/vocales/a.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function sigVocal(){ 
            var vocal = document.getElementById("vocalActual").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //VOCAL E
            if(vocal=="a"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==13){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/e.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/vocales/elefante.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //VOCAL i
            if(vocal=="e"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==14){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/i.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/vocales/iguana.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL o
            if(vocal=="i"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==15){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/o.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img  class='img-responsive' src='img/vocales/oso.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL u
            if(vocal=="o"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==16){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/u.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/vocales/urraca.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }

        }    
        function antVocal(){ 
            var vocal = document.getElementById("vocalActual").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //VOCAL E
            if(vocal=="e"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==12){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/a.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/vocales/abeja.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //VOCAL i
            if(vocal=="i"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==13){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/e.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/vocales/elefante.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL o
            if(vocal=="o"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==14){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/i.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img  class='img-responsive' src='img/vocales/iguana.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL u
            if(vocal=="u"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==15){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/o.png'> </a>");
                        $(".animalVocal").html("<a href='#'> <img class='img-responsive' src='img/vocales/oso.png'> </a>");                                                                     
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
    <script src="js/vocal_audio.js" ></script>
</body>
</html>
