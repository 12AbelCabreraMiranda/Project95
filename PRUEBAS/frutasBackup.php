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
        <div class="row" id="encabezadoFruta">
            <div class="col-md-12">
                <h1 id="TituloFrutasDulces">“Frutas Dulces”</h1>
            </div>            
        </div>
        <!-- CUERPO DE IMAGENES-->
        <div class="container-fluid">
            <div class="row sep" style="margin-top:20px" id="separacionEC">
                <!-- CUERPO DE frutas-->
                <div class="col-md-8 fondo_fruta " >
                    <p class="text-left" id="titulos" name="titulo">Manzana Roja</p>
                    <!--<a href="#" onmousedown="voz1.play()" > <img class="img-responsive" id="fruta" src="img/frutas/manzana_roja.png"> </a> -->
                    
                    <!-- IMAGENES CENTRO-->
                    <div id="fruta">
                        <a href="#" onmousedown="voz1.play()" > <img class="img-responsive" src="img/frutas/manzana_roja.png"> </a>
                    </div>                                        
                    <!-- IMAGENES VISTAS MINIATURAS SIGUIENTES-->
                    <div id="siguiente"style=" height:90px;width:90px">
                        <!--<a href="#" onClick="siguientes()" > <img class="img-responsive img-circle"  src="img/frutas/pera.jpg"  > </a>-->
                    </div>

                </div>
                <!-- CUERPO DE Avance-->
                <div class="col-md-4 avance">                    
                    <a href="#"> <img class="img-responsive img-circle" id="imagenPerfil" style="height:90px; width:auto" src="img/abel.jpg"> </a>                    
                    
                    <p class="text-center" id="tituloAvance">Nivel de Avance</p>
                    <p style="color:white" >Fruta Dulce</p>
                    <div class="progress">                                                
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">                            
                            <span class="sr-only">60% Complete</span>95%
                        </div>
                    </div>
                    <p style="color:white">Fruta Ácido</p>
                    <div class="progress">                                                
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 15%">                            
                            <span class="sr-only">60% Complete</span>15%
                        </div>
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