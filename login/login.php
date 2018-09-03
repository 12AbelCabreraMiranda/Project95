<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/estilosLogin.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
</head>

<style>
    body{
        font-family: Arial; background-color: rgb(2, 67, 128); box-sizing: border-box; padding-top:60px; 
    }

    form{
        background-color: white;
        padding: 20px;
        color: #999;
        margin: 0 auto;
        width: 300px;
        border-radius: 0 0 4px 4px;
    }
    input, textarea{
        outline: none; /*elimina los bordes asules que tiene por default*/
        border: 0;
        width: 280px; /*tamaño de los campos de textos*/
    }
    .field{
        border: solid 1px #ccc;
        padding: 10px;
        width: 225px; /*se le agrega los iconos en la misma fila de los cmpos de textos*/
        border-radius: 0 5px 5px 0;

    }
    .field:focus{
        border-color: #18A383;
    }
    .center-content{
        text-align: center;
    }
    .field-container div{
        display: inline-block;
        vertical-align: top;
    }
    .field-container i{ /* sele coloca margen a los iconos*/
        background-color: #ddd;
        color: #888;
        border: solid 1px #ccc;
        padding: 10px 10px 11px 10px;
        margin-right: -5px;/*se unen los iconos con los campos de textos*/
        vertical-align: top;
        border-radius: 5px 0 0 5px;
    }
    #menu, #formularios{
        margin: 0 auto;
        width: 340px;
    }
    #menu ul{
        list-style: none;
        margin: 0;
        padding: 0;
    }
    #menu ul li{
        display: inline-block;
        width: 50%;
        margin-right: -4px;
    }
    #menu ul li a{
        background-color: #ddd;
        color:#222;
        display: block;
        padding: 20px 20px;
        text-decoration: none;
    }
    #menu ul li a:hover{
        background-color: #eee;
    }

    .active{
        background-color:white !important;
    }
    .columns >div{
        display: inline-block;
        vertical-align: top;
        width: 50%;
        margin-right: -4px;
    }
    .columns .field{
        width: 80px;
    }
    #form-register{
        display:none;
    }

</style>

<body>
    <div class="" id="menu">
       <ul>
           <li><a class="active" href="login.php">Iniciar Sesión</a></li>
           <li><a href="registrarse.php">Registrarse</a></li>
       </ul> 
    </div>


    <div id="formularios">
    
        <!--INICIAR SESION -->        
        <form action="validar_usu.php" method="POST"> 
            <p>Usuario:</p>
            <div class="field-container">
                <i class="fa fa-envelope-o fa-lg" ></i>
                <input REQUIRED type="text" class="field" name="nombre_usuario" placeholder="Ingresar Usuario" > <br>
            </div>

            <p>Contraseña</p>
            <div class="field-container">
                <i class="fa fa-key fa-lg" aria-hidden="true"></i>
                <input REQUIRED type="password" class="field" name="contrasenia" placeholder="Ingresar Contraseña" > <br>
            </div>
                
            <p class="center-content"> <input type="submit" class="btn btn-green" value="Iniciar Sesion"> </p>
        </form>

        
        <!--REGISTRARSE-->
        <form action="#" id="form-register"> 
            <div class="columns">
                <div class="field-container">
                    <p>NOMBRE:</p>
                    <i class="fa fa-user-circle fa-lg" ></i>
                    <input type="text" class="field" placeholder="Ingresar Nombre" > <br>
                </div>

                <div class="field-container">
                    <p>APELLIDO</p>
                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                    <input type="text" class="field"> <br>
                </div>
            </div>


            <p>CORREO ELECTRONICO</p>
            <div class="field-container">
                <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
                <input type="text" class="field"> <br>
            </div>

            <p>CONTRASEÑA</p>
            <div class="field-container">
                <i class="fa fa-key fa-lg" aria-hidden="true"></i>
                <input type="text" class="field"> <br>
            </div>

            <div class="columns">
                <div class="field-container">
                    <p>DIRECCION</p>
                    <i class="fa fa-building fa-lg" aria-hidden="true"></i>
                    <input type="text" class="field"> <br>
                </div>
    
                <div class="field-container">
                    <p>TELEFONO</p>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    <input type="text" class="field"> <br>
                </div>
            </div>
            <p class="center-content">  <input type="submit" class="btn btn-green" value="Iniciar Sesion"></a> </p>
        </form>
    </div>

</body>
</html>