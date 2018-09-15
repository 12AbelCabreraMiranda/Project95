<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abecedarios</title>
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
        <header class="row encabez" >        
            <div id="atras"> 
                <a href="inicio.php" class="iconINICIO" >
                    <img src="img/inicio.png" class="img-responsive">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Aprendiendo los abecedarios”</h1></div>
        </header>
    
        <div class="row cuerpo1">
            <div class="col-md-5 col-xs-12 vocal" style="cursor:pointer" onclick="nombreFuncion()">
                <div class="tam_miniatura">
                    <audio style="display: none" id="audio" controls>
                        <source type="audio/mp3" src="audio/abecedarios/a.mp3">
                    </audio>
                    <p class="view_vocal" id="vocalActual">a</p>
                </div>
                <!-- VOCAL CENTRO -->
                <div class="espacioVocales">
                    
                    <!-- <a href="#" > <img class="img-responsive"  src="img/vocales/a.png"> </a> -->
                </div>

                <div class="botones">
                    <div class="anteriorVocal" onClick="antLetra()" > 
                        <p><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Anterior</p>  
                    </div>
                    <div class="siguienteVocal" onClick="sigLetra()"> 
                        <p>Siguiente&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></p> 
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-xs-12 animal" style="cursor:pointer" onclick="nombreFuncion()">
                <div class="animalVocal">
                    <a href="#" onmousedown='vozz1.play()'> <img class="img-responsive"  src="img/vocales/abeja.png"> </a>
                </div>
            </div>
        </div>        
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
       $(".espacioVocales").html("<a href='#' > <img class='img-responsive' src='img/vocales/a.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function sigLetra(){ 
            var vocal = document.getElementById("vocalActual").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //VOCAL b
            if(vocal=="a"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==18){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/b.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz2.play()'> <img class='img-responsive' src='img/abecedarios/burro.jpg'> </a>");
                        voz2.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL c
            if(vocal=="b"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==19){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img  class='img-responsive' src='img/abecedarios/c.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz3.play()'> <img class='img-responsive' src='img/abecedarios/casa.jpg'> </a>"); 
                        voz3.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL D
            if(vocal=="c"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==20){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/D.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz4.play()'> <img class='img-responsive' src='img/abecedarios/dado.jpg'> </a>"); 
                        voz4.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL E
            if(vocal=="d"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==13){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/E.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz5.play()'> <img class='img-responsive' src='img/abecedarios/escuela.jpg'> </a>"); 
                        voz5.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL F
            if(vocal=="e"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==21){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/F.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz6.play()'> <img class='img-responsive' src='img/abecedarios/flamenco.jpg'> </a>");   
                        voz6.play();                                                                   
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL G
            if(vocal=="f"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==22){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/G.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz7.play()'> <img class='img-responsive' src='img/abecedarios/gato.jpg'> </a>"); 
                        voz7.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL H
            if(vocal=="g"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==23){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/H.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz8.play()'> <img class='img-responsive' src='img/abecedarios/helado.jpg'> </a>"); 
                        voz8.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL I
            if(vocal=="h"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==14){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/I.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz9.play()'> <img class='img-responsive' src='img/abecedarios/isla.jpg'> </a>"); 
                        voz9.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL J
            if(vocal=="i"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==24){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/J.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz10.play()'> <img class='img-responsive' src='img/abecedarios/jugo.jpg'> </a>"); 
                        voz10.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL K
            if(vocal=="j"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==25){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/K.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz11.play()'> <img class='img-responsive' src='img/abecedarios/karate.jpg'> </a>"); 
                        voz11.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL L
            if(vocal=="k"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==26){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/L.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz12.play()'> <img class='img-responsive' src='img/abecedarios/libros.jpg'> </a>");  
                        voz12.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL M
            if(vocal=="l"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==27){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/M.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz13.play()'> <img class='img-responsive' src='img/abecedarios/mano.jpg'> </a>");
                        voz13.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL N
            if(vocal=="m"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==28){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/N.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz14.play()'> <img class='img-responsive' src='img/abecedarios/nube.jpg'> </a>"); 
                        voz14.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL O
            if(vocal=="n"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==15){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/O.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz15.play()'> <img class='img-responsive' src='img/abecedarios/oveja.jpg'> </a>");  
                        voz15.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL P
            if(vocal=="o"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==30){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/P.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz16.play()'> <img class='img-responsive' src='img/abecedarios/pelota.jpg'> </a>");
                        voz16.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL Q
            if(vocal=="p"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==31){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/Q.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz17.play()'> <img class='img-responsive' src='img/abecedarios/queso.jpg'> </a>"); 
                        voz17.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL R
            if(vocal=="q"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==32){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/R.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz18.play()'> <img class='img-responsive' src='img/abecedarios/rosa.jpg'> </a>");
                        voz18.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
             //VOCAL S
             if(vocal=="r"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==33){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/S.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz19.play()'> <img class='img-responsive' src='img/abecedarios/superman.jpg'> </a>");  
                        voz19.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL T
            if(vocal=="s"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==34){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/T.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz20.play()'> <img class='img-responsive' src='img/abecedarios/tomate.png'> </a>");
                        voz20.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL U
            if(vocal=="t"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==16){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/U.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz21.play()'> <img class='img-responsive' src='img/abecedarios/uva.jpg'> </a>");  
                        voz21.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL V
            if(vocal=="u"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==35){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/V.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz22.play()'> <img class='img-responsive' src='img/abecedarios/vaca.jpg'> </a>");
                        voz22.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL W
            if(vocal=="v"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==36){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/W.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz23.play()'> <img class='img-responsive' src='img/abecedarios/walkie.jpg'> </a>");   
                        voz23.play();                                                                   
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL X
            if(vocal=="w"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==37){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/X.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz24.play()'> <img class='img-responsive' src='img/abecedarios/xilofono.jpg'> </a>"); 
                        voz24.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL Y
            if(vocal=="x"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==38){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/Y.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz25.play()'> <img class='img-responsive' src='img/abecedarios/yoyo.jpg'> </a>");
                        voz25.play();                                                                      
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL Z
            if(vocal=="y"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==39){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/Z.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz26.play()'> <img class='img-responsive' src='img/abecedarios/zanahoria.jpg'> </a>"); 
                        voz26.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }




        }
        function antLetra(){ 
            var vocal = document.getElementById("vocalActual").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //VOCAL a
            if(vocal=="b"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==12){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/a.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz1.play()'> <img class='img-responsive' src='img/abecedarios/abeja.png'> </a>"); 
                        voz1.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL b
            if(vocal=="c"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==18){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img  class='img-responsive' src='img/abecedarios/B.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz2.play()'> <img class='img-responsive' src='img/abecedarios/burro.jpg'> </a>"); 
                        voz2.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL c
            if(vocal=="d"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==19){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/C.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz3.play()'> <img class='img-responsive' src='img/abecedarios/casa.jpg'> </a>");   
                        voz3.play();                                                                  
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL d
            if(vocal=="e"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==20){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/D.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz4.play()'> <img class='img-responsive' src='img/abecedarios/dado.jpg'> </a>");  
                        voz4.play();                                                                   
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL e
            if(vocal=="f"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==13){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/E.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz5.play()'> <img class='img-responsive' src='img/abecedarios/escuela.jpg'> </a>"); 
                        voz5.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL f
            if(vocal=="g"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==21){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/F.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz6.play()'> <img class='img-responsive' src='img/abecedarios/flamenco.jpg'> </a>"); 
                        voz6.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL g
            if(vocal=="h"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==22){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/G.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz7.play()'> <img class='img-responsive' src='img/abecedarios/gato.jpg'> </a>"); 
                        voz7.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL h
            if(vocal=="i"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==23){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/H.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz8.play()'> <img class='img-responsive' src='img/abecedarios/helado.jpg'> </a>");
                        voz8.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL i
            if(vocal=="j"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==14){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/I.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz9.play()'> <img class='img-responsive' src='img/abecedarios/isla.jpg'> </a>");  
                        voz9.play();                                                                   
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL j
            if(vocal=="k"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==24){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/J.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz10.play()'> <img class='img-responsive' src='img/abecedarios/jugo.jpg'> </a>"); 
                        voz10.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL k
            if(vocal=="l"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==25){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/K.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz11.play()'> <img class='img-responsive' src='img/abecedarios/karate.jpg'> </a>"); 
                        voz11.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL L
            if(vocal=="m"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==26){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/L.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz12.play()'> <img class='img-responsive' src='img/abecedarios/libros.jpg'> </a>");
                        voz12.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL m
            if(vocal=="n"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==27){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/M.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz13.play()'> <img class='img-responsive' src='img/abecedarios/mano.jpg'> </a>");  
                        voz13.play();                                                                   
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL n
            if(vocal=="o"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==28){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/N.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz14.play()'> <img class='img-responsive' src='img/abecedarios/nube.jpg'> </a>"); 
                        voz14.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL o
            if(vocal=="p"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==15){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/O.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz15.play()'> <img class='img-responsive' src='img/abecedarios/oveja.jpg'> </a>");  
                        voz15.play();                                                                   
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL p
            if(vocal=="q"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==30){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/P.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz16.play()'> <img class='img-responsive' src='img/abecedarios/pelota.jpg'> </a>"); 
                        voz16.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL q
            if(vocal=="r"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==31){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/Q.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz17.play()'> <img class='img-responsive' src='img/abecedarios/queso.jpg'> </a>");   
                        voz17.play();                                                                  
                    }                                                                                                 
                }                                                                                                                                  
            }
             //VOCAL r
             if(vocal=="s"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==32){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/R.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz18.play()'> <img class='img-responsive' src='img/abecedarios/rosa.jpg'> </a>"); 
                        voz18.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL s
            if(vocal=="t"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==33){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/S.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz19.play()'> <img class='img-responsive' src='img/abecedarios/superman.jpg'> </a>"); 
                        voz19.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL t
            if(vocal=="u"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==34){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/T.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz20.play()'> <img class='img-responsive' src='img/abecedarios/tomate.png'> </a>");
                        voz20.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL u
            if(vocal=="v"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==16){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/U.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz21.play()'> <img class='img-responsive' src='img/abecedarios/uva.jpg'> </a>"); 
                        voz21.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL v
            if(vocal=="w"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==35){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/V.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz22.play()'> <img class='img-responsive' src='img/abecedarios/vaca.jpg'> </a>");
                        voz22.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL w
            if(vocal=="x"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==36){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/W.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz23.play()'> <img class='img-responsive' src='img/abecedarios/walkie.jpg'> </a>");
                        voz23.play();                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL x
            if(vocal=="y"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==37){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/X.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz24.play()'> <img class='img-responsive' src='img/abecedarios/xilofono.jpg'> </a>"); 
                        voz24.play();                                                                    
                    }                                                                                                 
                }                                                                                                                                  
            }
            //VOCAL y
            if(vocal=="z"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==38){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/abecedarios/Y.png'> </a>");
                        $(".animalVocal").html("<a href='#' onmousedown='vozz25.play()'> <img class='img-responsive' src='img/abecedarios/yoyo.jpg'> </a>");  
                        voz25.play();                                                                   
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
    <script src="js/audios/abecedarios_audio.js"></script>
</body>
</html>
