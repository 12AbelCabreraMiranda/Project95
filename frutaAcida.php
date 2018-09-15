<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frutas Ácidas</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" ></script>
    <link rel="icon" href="img/android.png">
    <link rel="stylesheet" href="css/fruta_acida.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
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
        <!-- Fila Encabezado-->
        
        <header class="row encabez">
            <div id="atras"> 
                <a href="catFrutas.php" class="iconINICIO" >
                    <img src="img/atrasF.png" class="img-responsive" alt="">
                </a>
            </div>
            <div id="encabezadoFruta" ><h1 id="TituloFrutasDulces">“Frutas Ácidas"</h1></div>
        </header>               
        
        <!-- CUERPO DE IMAGENES-->
        <div class="container-fluid">
        
            <div class="row sep col-lg-offset-1" id="sepa" >  
                <!-- CUERPO DE frutas ANTERIORES-->
                <div  class=" col-lg-2 anterior"id="anterior" onClick="previus()"></div>        
                <!-- CUERPO DE frutas CENTRO-->
                <div class="col-lg-6 fondo_fruta">
                    <p class="text-left" id="titulos" name="titulo">Cacao</p>
                    <!--<a href="#" onmousedown="voz1.play()" > <img class="img-responsive" id="fruta" src="img/frutas/manzana_roja.png"> </a> -->
                    
                     <!-- IMAGENES VISTAS MINIATURAS ANTERIOR-->
                     <div class="anterior"id="anteriorP" onClick="previus()"  style="background-color:red; height:90px;width:90px">
                         <!--<a href="#"  > <img class="img-responsive img-circle"  src="img/frutas/pera.png"  > </a>-->
                    </div>

                    <!-- IMAGENES CENTRO-->
                    <div id="fruta">
                        <a href="#" onmousedown="voz1.play()" > <img class="img-responsive " src="img/frutas/fruta_acida/cacao.png"></a>
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
       
        //INICIALIZACION
        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cereza.png'> </a>");
        //INICIO DE CONDICIONES PARA IR CAMBIANDO IMAGENES
       
        function siguientes(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //FRUTA 2
            if(prueba=="Cacao"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==102){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cereza.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/ciruela.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cacao.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //FRUTA 3
            if(prueba=="Cereza"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==103){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz3.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/ciruela.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/durazno.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cereza.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 4
            if(prueba=="Ciruela"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==104){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz4.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/durazno.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/fresa.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/ciruela.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 5
            if(prueba=="Durazno"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==105){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz5.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/fresa.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/guanaba.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/durazno.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 6
            if(prueba=="Fresa"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==106){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz6.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/guanaba.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/lima.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/fresa.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 7
            if(prueba=="Guanaba"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==107){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz7.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/lima.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/limon.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/guanaba.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 8
            if(prueba=="Lima"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==108){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz8.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/limon.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mandarina.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/lima.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 9
            if(prueba=="Limon"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==109){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz9.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mandarina.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/maranion.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/limon.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 10
            if(prueba=="Mandarina"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==110){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz10.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/maranion.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mora.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mandarina.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 11
            if(prueba=="Maranion"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==111){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz11.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mora.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/naranja.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/maranion.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 12
            if(prueba=="Mora"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==112){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz12.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/naranja.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pataxte.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mora.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 13
            if(prueba=="Naranja"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==113){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz13.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pataxte.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pinia.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/naranja.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 14
            if(prueba=="Pataxte"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==114){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz14.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pinia.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/tamarindo.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pataxte.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 15
            if(prueba=="Pinia"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==115){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz15.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/tamarindo.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/uva.png'> </a>");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pinia.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 16
            if(prueba=="Tamarindo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==116){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo
                        $("#fruta").html("<a href='#' onmousedown='voz16.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/uva.png'> </a>");
                        //SobrePone imagen View Minieatura
                        $(".siguiente").html("");                        
                        //$("#cambiar").html(frutNex);                      
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/tamarindo.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
        }                
        // imagen previus
        function previus(){ 
            var prueba = document.getElementById("titulos").innerHTML ; //obtengo el valor del texto de la etiqueta para se comparado                                                        
            //FRUTA 1
            if(prueba=="Cereza"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==101){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz1.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cacao.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cereza.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("");
                    }                                                                                                 
                }                                                                                                                                  
            } 
            //FRUTA 2
            if(prueba=="Ciruela"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==102){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz2.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cereza.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/ciruela.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cacao.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 3
            if(prueba=="Durazno"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==103){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz3.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/ciruela.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/durazno.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/cereza.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 4
            if(prueba=="Fresa"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==104){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz4.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/durazno.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/fresa.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/ciruela.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 5
            if(prueba=="Guanaba"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==105){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz5.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/fresa.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/guanaba.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/durazno.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 6
            if(prueba=="Lima"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==106){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz6.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/guanaba.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/lima.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/fresa.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 7
            if(prueba=="Limon"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==107){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz7.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/lima.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/limon.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/guanaba.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 8
            if(prueba=="Mandarina"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==108){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz8.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/limon.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mandarina.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/lima.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 9
            if(prueba=="Maranion"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==109){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz9.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mandarina.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/maranion.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/limon.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 10
            if(prueba=="Mora"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==110){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz10.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/maranion.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mora.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mandarina.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 11
            if(prueba=="Naranja"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==111){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz11.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mora.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/naranja.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/maranion.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 12
            if(prueba=="Pataxte"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==112){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz12.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/naranja.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pataxte.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/mora.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 13
            if(prueba=="Pinia"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==113){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz13.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pataxte.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pinia.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/naranja.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 14
            if(prueba=="Tamarindo"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==114){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz14.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pinia.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/tamarindo.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pataxte.png'> </a>");
                    }                                                                                                 
                }                                                                                                                                  
            }
            //FRUTA 15
            if(prueba=="Uva"){                                                                                                
                for(var i in productos.data){                                          
                    var nom = new Array();                                                           
                    nom= [productos.data[i].idImagenes];                                                                                                                   
                    if(nom==115){                                                             
                        var x=(productos.data[i].nombreImagen);                                                           
                        $("#titulos").html(x);//SobreEscribe NuevoNombre 
                        //SobrePone ImagenNuevo CENTRO
                        $("#fruta").html("<a href='#' onmousedown='voz15.play()'> <img class='img-responsive img-circle' src='img/frutas/fruta_acida/tamarindo.png'> </a>");
                        //SobrePone imagen View Minieatura SIGUIENTE
                        $(".siguiente").html("<a href='#' onClick='siguientes()' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/uva.png'> </a>");
                        //Miniatura view ANTERIOR
                        $(".anterior").html("<a href='#' > <img class='img-responsive img-circle' src='img/frutas/fruta_acida/pinia.png'> </a>");
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

  <script src="js/audios/frutasAcidas_audio.js" ></script>
</body>
</html>