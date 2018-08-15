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
                <div class="tam_miniatura">
                    <p class="view_vocal" id="vocalActual">a</p>
                </div>
                <!-- VOCAL CENTRO -->
                <div class="espacioVocales">
                    <!--<a href="#" > <img class="img-responsive"  src="img/vocales/a.png"> </a> -->
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
            //FRUTA 2
            if(vocal=="a"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==13){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $(".view_vocal").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $(".espacioVocales").html("<a href='#'> <img class='img-responsive' src='img/vocales/e.png'> </a>");                                                                     
                    }                                                                                                 
                }                                                                                                                                  
            } 

        }       
                 
        // imagen previus
        /*
        function previus(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //FRUTA 1
            if(prueba=="Manzana Verde"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==1){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/frutas/manzana_roja.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzana_roja.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //FRUTA 2
            if(prueba=="Papaya"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==2){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzana_roja.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 3
            if(prueba=="Pera"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==3){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz3.play()'> <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //FRUTA 4
            if(prueba=="Sandia"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==4){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz4.play()'> <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 5
            if(prueba=="Uva"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==5){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz5.play()'> <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 6
            if(prueba=="Zapote"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==6){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz6.play()'> <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 7
            if(prueba=="Guayaba"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==7){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz7.play()'> <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 8
            if(prueba=="Higo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==8){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz8.play()'> <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 9
            if(prueba=="Banano"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==9){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz9.play()'> <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Banano.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 10
            if(prueba=="Melon"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==10){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz10.play()'> <img class='img-responsive img-circle' src='img/frutas/Banano.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Melon.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }

        } */        
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
