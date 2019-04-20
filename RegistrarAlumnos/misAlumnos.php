

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis Alumnos</title>
    <script src="../js/jquery-3.2.1.js"></script>    
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--No funciona los iconos -->        
    <link rel="stylesheet" href="fondo.css">
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
        <div class="row"> 
            <center>
                <h1>Establecimiento Educativo</h1>
            </center>           
            <div class="col-lg-4 col-lg-offset-4 fondo_form">                
                <center>
                <h3>Registrar mis Alumnos</h3>
                </center> 
                <form action="misAlumnos.php" method="post" id="formDatosEstudiantes" enctype="multipart/form-data">
                    <br>
                    <div class="form-group">
                        <label for="nombre">NOMBRE COMPLETO</label>                        
                        <input REQUIRED name="nombre" class="form-control" id="nombres" type="text" placeholder="Nombre Completo" onkeypress="return soloLetras(event)" onpaste="return false">
                    </div>
                    <div class="form-group">
                        <label for="nombre">APELLIDO COMPLETO</label>                        
                        <input REQUIRED name="apellido" type="text"  class="form-control" placeholder="Ingresar Apellido Completo" onkeypress="return soloLetras(event)" onpaste="return false">
                    </div>
                    <div class="form-group">
                        <label for="nombre">EDAD</label>                        
                        <input REQUIRED name="edad" type="number" class="form-control"  min="1" max="6" placeholder="0" value="" onkeypress="return soloNumero(event)" onpaste="return false">
                    </div>
                    <div class="form-group">
                        <label for="nombre">CODIGO DEL ESTUDIANTE</label>                        
                        <input REQUIRED name="codigo" type="text" class="form-control" placeholder="Ingresar Código" value="">                        
                        <!-- Respuesta de la base de datos-->
                        <p style="text-align:center" id="registradoAlumno"></p>                        
                    </div>
                    <center>
                        <input onclick="registrarAlumno()" id="boton" type="submit" class="btn btn-info btn-block" value="Registrar">                       
                    </center> 
                </form>
                <center>
                    <button class="btn btn-default" id="nuevo" onclick="nuevoRegistro()">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo
                    </button>
                    <a href="../inicio.php">
                        <button class="btn btn-warning" id="botonInicio">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio
                        </button>
                    </a> 
                </center>
            </div>
        </div>
    </div>
        
    <script src="../js/bootstrap.min.js" ></script>
    <script src="guardarAlumnos.js" ></script>
    <script src="validacionCaracter.js"></script>
    <script src="validarInNumero.js"></script>

</body>
</html>