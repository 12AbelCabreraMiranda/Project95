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
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Aprendiendo las Vocales”</h1></div>
        </header>
    
        <div class="row cuerpo1">
            <div class="col-md-5 col-xs-12 vocal"  onclick="escucharVocal()">
                <div class="tam_miniatura">
                    <audio style="display: none" id="audio" controls>
                        <source type="audio/mp3" src="audio/vocales/a.mp3">
                    </audio>
                    <p class="view_vocal" id="vocalActual" style="cursor:pointer">a</p>
                </div>
                <!-- VOCAL CENTRO -->
                <div class="espacioVocales">
                    <!--<a href="#" > <img class="img-responsive"  src="img/vocales/a.png"> </a> -->
                </div>

                <div class="botones">
                    <div class="anteriorVocal" onClick="antVocal()" > 
                        <p>
                            <img  src="img/atras1.png" class="sigui">&nbsp;&nbsp;&nbsp;Anterior
                        </p> 
                    </div>
                    <div class="siguienteVocal" onClick="sigVocal()"> 
                        <p>Siguiente&nbsp;&nbsp;&nbsp;
                            <img  src="img/siguiente1.png" class="sigui">
                        </p> 
                    </div>
                </div>
            </div>
            <!--ESPACIO ANIMAL VOCAL -->
            <div class="col-md-7 col-xs-12 animal"  onclick="escucharVocalAnimal()">
                <div class="animalVocal">
                    <a href="#" onmousedown='vozz1.play()'> <img class="img-responsive "  src="img/vocales/abeja.png"> </a>
                </div>
            </div>
        </div>        
    </div>
    <!--NO DISPONIBLE PARA MOVIL, SISTEMA EN CONTRUCCIÓN -->
    <div class="noDisponibleMovil">   
        <p>Sistema aún no disponible para Móvil</p>    
        <hr> 
        <p>SITEMA EN CONSTRUCCIÓN</p>
        <a href="#"> <img class="img-responsive" src="img/tecnologia.png"> </a>
    </div>
        <!-- funciones de JavaScript, Squery y Json-->
    <script>
        var audio = document.getElementById("audio");   
        audio.play();

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
        $(".espacioVocales").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive' src='img/vocales/a.png'> </a>");
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive' src='img/vocales/e.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz2.play()'> <img class='img-responsive' src='img/vocales/elefante.png'> </a>"); 
                        voz2.play();                                                                    
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz3.play()'> <img class='img-responsive' src='img/vocales/i.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz3.play()'> <img class='img-responsive' src='img/vocales/iguana.png'> </a>");   
                        voz3.play();                                                                  
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz4.play()'> <img class='img-responsive' src='img/vocales/o.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz4.play()'> <img  class='img-responsive' src='img/vocales/oso.png'> </a>");
                        voz4.play();                                                                     
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz5.play()'> <img class='img-responsive' src='img/vocales/u.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz5.play()'> <img class='img-responsive' src='img/vocales/urraca.png'> </a>");
                        voz5.play();                                                                     
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive' src='img/vocales/a.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz1.play()'> <img class='img-responsive' src='img/vocales/abeja.png'> </a>"); 
                        voz1.play();                                                                     
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive' src='img/vocales/e.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz2.play()'> <img class='img-responsive' src='img/vocales/elefante.png'> </a>");
                        voz2.play();                                                                      
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz3.play()'> <img class='img-responsive' src='img/vocales/i.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz3.play()'> <img  class='img-responsive' src='img/vocales/iguana.png'> </a>");  
                        voz3.play();                                                                    
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
                        $(".espacioVocales").html("<a href='#' onmousedown='voz4.play()'> <img class='img-responsive' src='img/vocales/o.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz4.play()'> <img class='img-responsive' src='img/vocales/oso.png'> </a>");
                        voz4.play();                                                                      
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
    <script src="js/audios/vocales_audios.js" ></script>
</body>
</html>
