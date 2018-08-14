<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frutas</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/estilo_footer.css">
    <link rel="stylesheet" href="css/estilo_img_responsive.css">
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/estiloFrutas.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_inicio.css">
</head>

<body>
    <div class="container-fluid">
        <!-- Fila Encabezado-->
        <header class="row">
            <div id="inicio"class="col-lg-1 col-md-3 col-sm-4 col-xs-2"> 
                <a href="catFrutas.php" class="iconINICIO" >
                    <img src="img/regresar.png" class="img-responsive" alt="">
                </a>    
            </div>
            <div id="encabezadoFruta" class="col-lg-11 col-md-9 col-sm-8 col-xs-10" ><h1 id="TituloFrutasDulces">“Frutas Dulces”</h1></div>
        </header>               
        
        <!-- CUERPO DE IMAGENES-->
        <div class="container-fluid">
            <div class="row sep col-lg-offset-3" style="margin-top:20px" id="separacionEC">
                <!-- CUERPO DE frutas-->
                <div class="col-lg-8  fondo_fruta  " >
                    <p class="text-left" id="titulos" name="titulo">Manzana Roja</p>
                    <!--<a href="#" onmousedown="voz1.play()" > <img class="img-responsive" id="fruta" src="img/frutas/manzana_roja.png"> </a> -->
                    
                     <!-- IMAGENES VISTAS MINIATURAS ANTERIOR-->
                     <div id="anterior"onClick="previus()" style="background-color:red; height:90px;width:90px">
                         <!--<a href="#"  > <img class="img-responsive img-circle"  src="img/frutas/pera.png"  > </a>-->
                    </div>

                    <!-- IMAGENES CENTRO-->
                    <div id="fruta">
                        <a href="#" onmousedown="voz1.play()" > <img class="img-responsive " src="img/frutas/manzana_roja.png"></a>
                    </div>                                        
                    <!-- IMAGENES VISTAS MINIATURAS SIGUIENTES-->
                    <div id="siguiente"style=" height:90px;width:90px">
                        <!--<a href="#" onClick="siguientes()" > <img class="img-responsive img-circle"  src="img/frutas/pera.jpg"  > </a>-->
                    </div>
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
                __ajax("prueba1Listar.php", "")
                .done(function(info){                
                     productos = JSON.parse(info); //cambiarlo por curso despues                             
                });            
        }            
       
        //INICIALIZACION
        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function siguientes(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //FRUTA 2
            if(prueba=="Manzana Roja"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==2){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzana_roja.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
             //FRUTA 3
             if(prueba=="Manzana Verde"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==3){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz3.play()'> <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $("#anterior").html("<a href='#'> <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 4
            if(prueba=="Papaya"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==4){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz4.play()'> <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex); 
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");                     
                    }                                                                                                 
                }                                                                                                                                  
            }  
            //FRUTA 5
            if(prueba=="Pera"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==5){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz5.play()'> <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");                                           
                    }                                                                                                 
                }                                                                                                                                  
            }  
            //FRUTA 6
            if(prueba=="Sandia"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==6){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz6.play()'> <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);   
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");                                                              
                    }                                                                                                 
                }                                                                                                                                  
            }
             //FRUTA 7
             if(prueba=="Uva"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==7){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz7.play()'> <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);   
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");                   
                    }                                                                                                 
                }                                                                                                                                  
            }
              //FRUTA 8
              if(prueba=="Zapote"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==8){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz8.play()'> <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);    
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");                  
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 9
            if(prueba=="Guayaba"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==9){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz9.play()'> <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Banano.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex); 
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");                     
                    }                                                                                                 
                }                                                                                                                                  
            }
             //FRUTA 10
             if(prueba=="Higo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==10){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz10.play()'> <img class='img-responsive img-circle' src='img/frutas/Banano.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Melon.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);         
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");             
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 11
            if(prueba=="Banano"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==11){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz11.play()'> <img class='img-responsive img-circle' src='img/frutas/Melon.png'> </a>");
                        //SobrePone imagen View Minieatura
                        //$("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Melon.jpg'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);   
                        $("#anterior").html("<a href='#'  > <img class='img-responsive img-circle' src='img/frutas/Banano.png'> </a>");                      
                    }                                                                                                 
                }                                                                                                                                  
            }

        }                
        // imagen previus
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzana_roja.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzana_roja.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/manzanaVerde.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Papaya.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Pera.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Sandia.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Uva.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Zapote.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Banano.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Guayaba.png'> </a>");
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
                        $("#siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/Melon.png'> </a>");
                        //Miniatura view ANTERIOR
                        $("#anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/Higo.png'> </a>");
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