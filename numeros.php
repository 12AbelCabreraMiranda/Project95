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
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces" >“Aprendiendo los Números”</h1></div>
        </header>
    
        <div class="row cuerpo1">
            <div class="col-md-5 col-xs-12 vocal" style="cursor:pointer" onclick="nombreFuncion()">
               
                <!-- VOCAL CENTRO -->
                
                <div class="espacioVocales">
                    <audio style="display: none" id="audio" controls>
                        <source type="audio/mp3" src="audio/numeros/cero.mp3">
                    </audio>
                    <p id="numActual">0</p>
                </div>

                <div class="botones">
                    <div class="anteriorVocal" onClick="antNumero()" > 
                        <p>
                            <img  src="img/atras1.png" class="sigui">&nbsp;&nbsp;&nbsp;Anterior
                        </p> 
                    </div>
                    <div class="siguienteVocal" onClick="sigNumero()"> 
                        <p>Siguiente&nbsp;&nbsp;&nbsp;
                            <img  src="img/siguiente1.png" class="sigui">
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-xs-12 animal" style="cursor:pointer" onclick="nombreFuncion()">
                <div class="animalVocal">
                    
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
        //$(".espacioVocales").html("<a href='#' > <img class='img-responsive' src='img/vocales/a.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
        voz1.play(); 
        function sigNumero(){ 
            var num = $("#numActual").html(); //obtengo el valor del texto de la etiqueta para se comparado                                                        
           //NUMERO 1        
           if(num==0){
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==42){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#numActual").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".animalVocal").html("<a href='#' onmousedown='voz12.play()' > <img class='img-responsive' src='img/numero/uno.jpg'> </a>");  
                        voz2.play();  
                                          
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz13.play()'> <img class='img-responsive' src='img/numero/dos.jpg'> </a>");  
                        voz3.play();                      
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz14.play()'> <img class='img-responsive' src='img/numero/tres.jpg'> </a>");  
                        voz4.play();                       
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz15.play()'> <img class='img-responsive' src='img/numero/cuatro.jpg'> </a>");
                        voz5.play();                         
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz16.play()'> <img class='img-responsive' src='img/numero/cinco.jpg'> </a>");                        
                        voz6.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz17.play()'> <img class='img-responsive' src='img/numero/seis.jpg'> </a>");                        
                        voz7.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz18.play()'> <img class='img-responsive' src='img/numero/siete.jpg'> </a>");                        
                        voz8.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz19.play()'> <img class='img-responsive' src='img/numero/ocho.jpg'> </a>");                        
                        voz9.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz20.play()'> <img class='img-responsive' src='img/numero/nueve.jpg'> </a>");                        
                        voz10.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz21.play()'> <img class='img-responsive' src='img/numero/diez.jpg'> </a>"); 
                        voz11.play();                        
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
                        voz1.play();                      
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz12.play()'> <img class='img-responsive' src='img/numero/uno.jpg'> </a>");
                        voz2.play();                         
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz13.play()'> <img class='img-responsive' src='img/numero/dos.jpg'> </a>");                        
                        voz3.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz14.play()'> <img class='img-responsive' src='img/numero/tres.jpg'> </a>");                        
                        voz4.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz15.play()'> <img class='img-responsive' src='img/numero/cuatro.jpg'> </a>");                        
                        voz5.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz16.play()'> <img class='img-responsive' src='img/numero/cinco.jpg'> </a>");                        
                        voz6.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz17.play()'> <img class='img-responsive' src='img/numero/seis.jpg'> </a>");                        
                        voz7.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz18.play()'> <img class='img-responsive' src='img/numero/siete.jpg'> </a>");                        
                        voz8.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz19.play()'> <img class='img-responsive' src='img/numero/ocho.jpg'> </a>");                        
                        voz9.play(); 
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
                        $(".animalVocal").html("<a href='#' onmousedown='voz20.play()'> <img class='img-responsive' src='img/numero/nueve.jpg'> </a>");                        
                        voz10.play(); 
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
    <script src="js/audios/numero_audio.js"></script>
</body>
</html>
