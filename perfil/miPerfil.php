<?php
    require('..//bd/conexion.php');
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];

    $id;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $id =$row['id_maestroU'];
     }

    $nombre;
    $apellido;
    $establecimiento;
    $profesion;
    $query = "SELECT nombre, apellido,establecimiento,profesion from maestro WHERE idmaestro='$id' ";
    $resultado = $conexion->query($query);
    if($row = $resultado->fetch_assoc()){      
        $nombre =$row['nombre'];
        $apellido =$row['apellido'];
        $establecimiento =$row['establecimiento'];
        $profesion =$row['profesion'];
     }
?>

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
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: login/login.php");
        }
    ?>
    <a href="../inicio.php"> <button class="btn btn-info"> Inicio</button> </a>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <div class="container"><br>

    <!--EDICION DE DATOS -->
    <div class="col-md-4 col-lg-offset-4">
        <center><h1>Actulización de Datos</h1></center><br>
        <!--NOMBRE -->
        <form action="miPerfil.php" class="form-horizontal" method="post" id="form_nombre" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
            <div class="form-group"><!--Agrupacion -->
                <label class="control-label ">NOMBRE:</label>
                <div class="input-group">                       
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>             
                    <input class="form-control" nome="nombre" id="nombre" type="text" disabled value="<?php  echo $row['nombre']; ?>" >
                    <div class="input-group-addon" style="cursor:pointer" onclick="habilitarNombre()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </div>
                </div><br>
                <input type="button" class="btn btn-default botonGuardar" id="botonGuardarNombre" onclick="ActulizarNombre()" value="Guardar Cambios">
                <input type="button" class="btn btn-default botonCancelar"id="botonCancelarNombre" onclick="CancelarNombre()" value="Cancelar">
            </div>
        </form>
        <!--APELLIDO -->
        <form action="miPerfil.php" class="form-horizontal" method="post" id="form_apellido" enctype="multipart/form-data" style="margin-top:-20px"><!--Permite dar saltos de espacios entre filas -->
            <div class="form-group"><!--Agrupacion -->
                <label class="control-label ">APELLIDO:</label>
                <div class="input-group">    
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>                 
                    <input class="form-control" nome="apellido" id="apellido" type="text" disabled value="<?php  echo $row['apellido']; ?>">
                    <div class="input-group-addon" style="cursor:pointer" onclick="habilitarApellido()">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                </div><br>
                <input type="button" class="btn btn-default botonGuardar" id="botonGuardarApellido" onclick="ActulizarApellido()" value="Guardar Cambios">
                <input type="button" class="btn btn-default botonCancelar"id="botonCancelarApellido" onclick="CancelarApellido()" value="Cancelar">
            </div>
        </form>
        <!--ESTABLECIMIENTO -->
        <form action="miPerfil.php" class="form-horizontal" method="post" id="form_establecimiento" enctype="multipart/form-data" style="margin-top:-20px"><!--Permite dar saltos de espacios entre filas -->
            <div class="form-group"><!--Agrupacion -->
                <label class="control-label ">ESTABLECIMIENTO:</label>
                <div class="input-group">    
                    <div class="input-group-addon"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></div>                 
                    <input class="form-control" nome="establecimiento" id="establecimiento" type="text" disabled value="<?php  echo $row['establecimiento']; ?>">
                    <div class="input-group-addon" style="cursor:pointer" onclick="habilitarEstablecimiento()">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                </div><br>
                <input type="button" class="btn btn-default botonGuardar" id="botonGuardarEstablecimiento" onclick="ActulizarEstablecimiento()" value="Guardar Cambios">
                <input type="button" class="btn btn-default botonCancelar"id="botonCancelarEstablecimiento" onclick="CancelarEstablecimiento()" value="Cancelar">
            </div>
        </form>
        <!--PROFESION -->
        <form action="miPerfil.php" class="form-horizontal" method="post" id="form_profesion" enctype="multipart/form-data" style="margin-top:-20px"><!--Permite dar saltos de espacios entre filas -->
            <div class="form-group"><!--Agrupacion -->
                <label class="control-label ">PROFESION:</label>
                <div class="input-group">    
                    <div class="input-group-addon"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> </div>                 
                    <input class="form-control" nome="profesion" id="profesion" type="text" disabled value="<?php  echo $row['profesion']; ?>">
                    <div class="input-group-addon" style="cursor:pointer" onclick="habilitarProfesion()">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                </div><br>
                <input type="button" class="btn btn-default botonGuardar" id="botonGuardarProfesion" onclick="ActulizarProfesion()" value="Guardar Cambios">
                <input type="button" class="btn btn-default botonCancelar"id="botonCancelarProfesion" onclick="CancelarProfesion()" value="Cancelar">
            </div>
        </form>


    </div>
    </div>

   <script src="../js/jquery-3.2.1.js"></script>
   <script src="actualizar.js"></script>    
</body>
</html>