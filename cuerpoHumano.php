<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuerpo Humano</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" ></script>        
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/cuerpoHumano.css">
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
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Partes del Cuerpo Humano”</h1></div>
        </header>
        
        <!-- CUERPO DE IMAGENES-->
        <div class="container-fluid">
        
            <div class="row sep col-lg-offset-1" id="sepa" >  
                <!-- CUERPO DE frutas ANTERIORES-->
                <div  class=" col-lg-2 anterior"id="anterior" onClick="previus()"></div>        
                <!-- CUERPO DE frutas CENTRO-->
                <div class="col-lg-6  fondo_fruta  " >
                    <p class="text-left" id="titulos" name="titulo">Boca</p>
                    <!--<a href="#" onmousedown="voz1.play()" > <img class="img-responsive" id="fruta" src="img/frutas/manzana_roja.png"> </a> -->
                    
                     <!-- IMAGENES VISTAS MINIATURAS ANTERIOR-->
                     <div class="anterior"id="anteriorP" onClick="previus()"  style="background-color:red; height:90px;width:90px">
                         <!--<a href="#"  > <img class="img-responsive img-circle"  src="img/frutas/pera.png"  > </a>-->
                    </div>

                    <!-- IMAGENES CENTRO-->
                    <div id="fruta">
                        <a href="#" onmousedown="voz1.play()" > <img class="img-responsive " src="img/CuerpoHumano/boca.png"></a>
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
        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/cabeza.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function siguientes(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //Cuerpo 2
            if(prueba=="Boca"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==79){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/cabeza.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/dedo.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/boca.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            // cuerpo 3
            if(prueba=="Cabeza"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==80){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/dedo.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/diente.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/cabeza.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            // cuerpo 4
            if(prueba=="Dedo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==81){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/diente.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/lengua.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/dedo.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            // cuerpo 5
            if(prueba=="Diente"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==82){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/lengua.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/mano.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/diente.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            // cuerpo 6
            if(prueba=="Lengua"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==83){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/mano.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/nariz.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/lengua.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            // cuerpo 7
            if(prueba=="Mano"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==84){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/nariz.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/ojo.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/mano.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            // cuerpo 8
            if(prueba=="Nariz"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==85){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/ojo.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/oreja.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/nariz.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            // cuerpo 9
            if(prueba=="Ojo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==86){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/oreja.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/pie.png'> </a>");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/ojo.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            // cuerpo 10
            if(prueba=="Oreja"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==87){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/pie.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("");
                        //var frutNex = "Abecedarios";
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/oreja.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }


     

        }                
        // imagen previus
        function previus(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //cuerpo 1
            if(prueba=="Cabeza"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==78){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/boca.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/cabeza.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //cuerpo 2
            if(prueba=="Dedo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==79){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/cabeza.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/dedo.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/boca.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //cuerpo 3
            if(prueba=="Diente"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==80){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/dedo.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/diente.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/cabeza.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //cuerpo 4
            if(prueba=="Lengua"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==81){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/diente.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/lengua.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/dedo.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //cuerpo 5
            if(prueba=="Mano"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==82){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/lengua.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/mano.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/diente.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //cuerpo 6
            if(prueba=="Nariz"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==83){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/mano.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/nariz.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/Lengua.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //cuerpo 7
            if(prueba=="Ojo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==84){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/nariz.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/ojo.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/mano.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //cuerpo 8
            if(prueba=="Oreja"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==85){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/ojo.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/oreja.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/nariz.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
             //cuerpo 9
             if(prueba=="Pie"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==86){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/CuerpoHumano/oreja.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/CuerpoHumano/pie.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/CuerpoHumano/ojo.png'> </a>");
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