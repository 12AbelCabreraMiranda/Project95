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
    $usu;
    $query="SELECT maestro.nombre, maestro.apellido,maestro.establecimiento,maestro.profesion, usuario.nom_usuario
    from usuario 
    inner join maestro on maestro.idmaestro =usuario.id_maestroU
    WHERE idmaestro='$id' ";

    $resultado = $conexion->query($query);
    if($row = $resultado->fetch_assoc()){      
        $nombre =$row['nombre'];
        $apellido =$row['apellido'];
        $establecimiento =$row['establecimiento'];
        $profesion =$row['profesion'];
        $usu =$row['nom_usuario'];
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
    <link rel="stylesheet" href="../css/estilo_inicio.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

</head>
<body>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS        
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: login/login.php");
        }
    ?>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-xs-12 navegacion">
                <h1 id="tituloINICIO">“APLICACIÓN EDUCATIVA PARA EL APRENDIZAJE DEL HABLA NIVEL DE EDUCACIÓN PRE-PRIMARIA”</h1>
            </div>         
        </div>
    </div>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <div class="container-fluid"><br>

        <!--MI PERFLIL  -->
        <div class="col-md-3" id="perfil">
            <div class="fondoFotoPerfil">
                <a> <img class="img-responsive imgPerfil img-rounded"  style="margin-top:5px" src="../img/maestro.png"></a>                
            </div>
            <div class="datos">
                <label class="espacio">DOCENTE:</label>
                <p class="control-label "><?php  echo $row['nombre']; ?> <?php  echo $row['apellido']; ?></p>

                <label class="espacio">MI PROFESIÓN:</label>
                <p class="control-label "><?php echo $row['profesion']; ?></p>

                <label class="espacio">MI ESTABLECIMIENTO:</label>
                <p class="control-label "><?php echo $row['establecimiento']; ?></p>
            </div>
            <a href="../inicio.php"> 
                <button class="btn btn-info btn-block"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp; Inicio</button> 
            </a>
            <button class="btn btn-warning btn-block" onclick="editarDatos()"> 
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;&nbsp;Actualizar Datos
            </button> 
        </div>
        <!--EDICION DE DATOS -->    
        <div class="col-md-4 col-lg-offset-4 data">

            <center><h4 id="tituloActualizarDatos">Actualización de Datos </h4><p>X</p></center>
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
                    </div>
                    <input type="button" class="btn btn-default botonGuardar" id="botonGuardarNombre" onclick="ActulizarNombre()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarNombre" onclick="CancelarNombre()" value="Cancelar">
                </div>
            </form>
            <!--APELLIDO -->
            <form action="miPerfil.php" class="form-horizontal " method="post" id="form_apellido" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label">APELLIDO:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>                 
                        <input class="form-control" nome="apellido" id="apellido" type="text" disabled value="<?php  echo $row['apellido']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarApellido()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="button" class="btn btn-default botonGuardar" id="botonGuardarApellido" onclick="ActulizarApellido()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarApellido" onclick="CancelarApellido()" value="Cancelar">
                </div>
            </form>
            <!--ESTABLECIMIENTO -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_establecimiento" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">ESTABLECIMIENTO:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></div>                 
                        <input class="form-control" nome="establecimiento" id="establecimiento" type="text" disabled value="<?php  echo $row['establecimiento']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarEstablecimiento()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="button" class="btn btn-default botonGuardar" id="botonGuardarEstablecimiento" onclick="ActulizarEstablecimiento()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarEstablecimiento" onclick="CancelarEstablecimiento()" value="Cancelar">
                </div>
            </form>
            <!--PROFESION -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_profesion" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">PROFESION:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> </div>                 
                        <input class="form-control" nome="profesion" id="profesion" type="text" disabled value="<?php  echo $row['profesion']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarProfesion()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="button" class="btn btn-default botonGuardar" id="botonGuardarProfesion" onclick="ActulizarProfesion()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarProfesion" onclick="CancelarProfesion()" value="Cancelar">
                </div>
            </form>
            <hr style="margin-top:-15px;">
            <!--                 ACTUALIZAR SEGURIDAD             -->
            <center><h4 id="tituloActualizarDatos" style="margin-top:-15px">Actualización de Seguridad</h4></center><br>
            <!--NUEVO USUARIO -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_usuario" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">NUEVO USUARIO:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>                 
                        <input class="form-control" nome="usuario" id="usuario" type="text" disabled value="<?php  echo $row['nom_usuario']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarUsuario()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="button" class="btn btn-default botonGuardar" id="botonGuardarrUsuario" onclick="ActulizarrUsuario()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarrUsuario" onclick="CancelarrUsuario()" value="Cancelar">
                </div>
            </form>
            <!-- NUEVA CONTRASEÑA -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_contrasenia" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">NUEVA CONTRASEÑA:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><i class="fa fa-key fa-lg" aria-hidden="true"></i> </div>                 
                        <input class="form-control" nome="contrasenia" id="contrasenia" type="password" disabled placeholder="Ingresar Nueva Contraseña">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarContrasenia()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="button" class="btn btn-default botonGuardar" id="botonGuardarContrasenia" onclick="ActulizarContrasenia()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarContrasenia" onclick="CancelarContrasenia()" value="Cancelar">
                </div>
            </form>
        </div>
        
        <!--fondo de portada --> 
        <div class="col-md-9">
            <a href="#"> <img class="img-responsive" src="../img/portada.jpg"> </a>
        </div>  
    </div>

   <script src="../js/jquery-3.2.1.js"></script>
   <script src="actualizar.js"></script>    
</body>
</html>