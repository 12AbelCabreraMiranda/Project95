<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Perfil</title>
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="perfil_estilos.css">

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
    <a href="../inicio.php"> <button class="btn btn-info"> Inicio</button> </a>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <div class="container"><br>

    <!--EDICION DE DATOS -->
    <div class="col-md-6 col-lg-offset-3">
        <center><h1>Actulizacion de Datos</h1></center><br>
        <!--NOMBRE -->
        <form action="miPerfil.php" class="form-horizontal" method="post" id="form_nombre" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
            <div class="form-group"><!--Agrupacion -->
                <label class="control-label col-md-2">NOMBRE:</label><!--control-label: permite tenerlos a l 100% -->
                <div class="input-group">                    
                    <input class="form-control" nome="nombre" id="nombre" type="text" disabled >
                    <div class="input-group-addon" style="cursor:pointer" onclick="habilitarNombre()">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                </div><br>
                <input type="button" class="btn btn-default botonGuardar" id="botonGuardarNombre" onclick="ActulizarNombre()" value="Guardar Cambios">
                <input type="button" class="btn btn-default botonCancelar"id="botonCancelarNombre" onclick="CancelarNombre()" value="Cancelar">
            </div>
        </form>
        <!--APELLIDO -->
        <form action="miPerfil.php" class="form-horizontal" method="post" id="form_apellido" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
            <div class="form-group"><!--Agrupacion -->
                <label class="control-label col-md-2">APELLIDO:</label><!--control-label: permite tenerlos a l 100% -->
                <div class="input-group">                    
                    <input class="form-control" nome="apellido" id="apellido" type="text" disabled >
                    <div class="input-group-addon" style="cursor:pointer" onclick="habilitarApellido()">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                </div><br>
                <input type="button" class="btn btn-default botonGuardar" id="botonGuardarApellido" onclick="ActulizarApellido()" value="Guardar Cambios">
                <input type="button" class="btn btn-default botonCancelar"id="botonCancelarApellido" onclick="CancelarNombre()" value="Cancelar">
            </div>
        </form>


    </div>
    </div>

   <script src="../js/jquery-3.2.1.js"></script>
   <script src="actualizar.js"></script>    
</body>
</html>