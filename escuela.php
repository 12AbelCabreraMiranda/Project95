<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escuela</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" ></script>        
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/escuela.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">    
</head>

<body>
    <div class="container-fluid">
        <!-- Fila Encabezado-->
        
        <header class="row encabez">
            <div id="atras">
                <a href="inicio.php" class="iconINICIO" >
                    <img src="img/inicio.png" class="img-responsive" alt="">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Escuela”</h1></div>
        </header>
        
        <!-- CUERPO DE IMAGENES-->
        <div class="container-fluid">
        
            <div class="row sep col-lg-offset-1" id="sepa" >  
                <!-- CUERPO DE frutas ANTERIORES-->
                <div  class=" col-lg-2 anterior"id="anterior" onClick="previus()"></div>        
                <!-- CUERPO DE frutas CENTRO-->
                <div class="col-lg-6  fondo_fruta  " >
                    <p class="text-left" id="titulos" name="titulo">Borrador</p>
                    <!--<a href="#" onmousedown="voz1.play()" > <img class="img-responsive" id="fruta" src="img/frutas/manzana_roja.png"> </a> -->
                    
                     <!-- IMAGENES VISTAS MINIATURAS ANTERIOR-->
                     <div class="anterior"id="anteriorP" onClick="previus()"  style="background-color:red; height:90px;width:90px">
                         <!--<a href="#"  > <img class="img-responsive img-circle"  src="img/frutas/pera.png"  > </a>-->
                    </div>

                    <!-- IMAGENES CENTRO-->
                    <div id="fruta">
                        <a href="#" onmousedown="voz1.play()" > <img class="img-responsive " src="img/Escuela/borrador.png"></a>
                    </div>                                        
                    <!-- IMAGENES VISTAS MINIATURAS SIGUIENTES-->
                    <div class="siguiente" id="siguienteP" style=" height:90px;width:90px">
                        <!--<a href="#" onClick="siguientes()" > <img class="img-responsive img-circle"  src="img/frutas/pera.jpg"  > </a>-->
                    </div>
                </div>

                <!-- CUERPO DE frutas SIGUIENTES-->
                <div class="col-lg-2 siguiente" id="siguiente" > </div>                
                
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
       
        //INICIALIZACION DE SIGUIENTE
        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/crayon.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function siguientes(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //escuela 2
            if(prueba=="Borrador"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==89){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/crayon.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/cuaderno.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/borrador.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //escuela 3
            if(prueba=="Crayon"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==90){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/cuaderno.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/lapiz.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/crayon.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }  
            //escuela 4
            if(prueba=="Cuaderno"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==91){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/lapiz.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/maestra.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/cuaderno.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }   
            //escuela 5
            if(prueba=="Lapiz"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==92){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/maestra.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/mesa.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/lapiz.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }  
            //escuela 6
            if(prueba=="Maestra"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==93){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/mesa.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/mochila.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/maestra.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }  
            //escuela 7
            if(prueba=="Mesa"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==94){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/mochila.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/pelota.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/mesa.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }  
            //escuela 8
            if(prueba=="Mochila"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==95){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/pelota.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/pizarron.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/mochila.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }   
            //escuela 9
            if(prueba=="Pelota"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==96){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/pizarron.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/regla.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/pelota.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //escuela 10
            if(prueba=="Pizarron"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==97){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/regla.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/sacapuntas.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/pizarron.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }   
            //escuela 11
            if(prueba=="Regla"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==98){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/sacapuntas.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/silla.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/regla.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //escuela 12
            if(prueba=="Sacapuntas"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==99){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/silla.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/tijera.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/sacapuntas.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }    
            //escuela 13
            if(prueba=="Silla"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==100){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/Escuela/tijera.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/silla.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }  
        }                
        // imagen previus
        function previus(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //escuela 1
            if(prueba=="Crayon"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==88){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/borrador.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/crayon.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //escuela 2
            if(prueba=="Cuaderno"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==89){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/crayon.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/cuaderno.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/borrador.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 3
            if(prueba=="Lapiz"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==90){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/cuaderno.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/lapiz.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/crayon.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 4
            if(prueba=="Maestra"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==91){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/lapiz.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/maestra.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/cuaderno.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 5
            if(prueba=="Mesa"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==92){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/maestra.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/mesa.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/lapiz.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 6
            if(prueba=="Mochila"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==93){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/mesa.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/mochila.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/maestra.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 7
            if(prueba=="Pelota"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==94){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/mochila.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/pelota.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/mesa.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 8
            if(prueba=="Pizarron"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==95){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/pelota.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/pizarron.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/mochila.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 9
            if(prueba=="Regla"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==96){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/pizarron.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/regla.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/pelota.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 10
            if(prueba=="Sacapuntas"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==97){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/regla.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/sacapuntas.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/pizarron.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 11
            if(prueba=="Silla"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==98){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/sacapuntas.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/silla.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/regla.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //escuela 12
            if(prueba=="Tijera"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==99){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/Escuela/silla.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/Escuela/tijera.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/Escuela/sacapuntas.png'> </a>");
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

  <script src="audio.js" ></script>
</body>
</html>