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
            <!--MI FOTO PERFLIL  -->
            <div class="fondoFotoPerfil">
                <a> <img class="img-responsive imgPerfil img-rounded"  style="margin-top:5px" src="../img/maestro.png"></a>  
                <div id="fondoSubirFotoPerfil"> <p id="subirFotoPerfil"> Subir Foto</p> </div>              
            </div>
            <!--MIS DATOS  -->
            <div class="datos">
                <label class="espacio" id="docente">DOCENTE:</label>               
                <p class="control-label " id="nombreNuevo"><?php  echo $row['nombre']; ?> </p>
                <p class="control-label " id="apellidoNuevo"> <?php  echo $row['apellido']; ?></p>

                <label class="espacio" id="mi_profesion">MI PROFESIÓN:</label>
                <p class="control-label "><?php echo $row['profesion']; ?></p>

                <label class="espacio" id="mi_establecimiento">MI ESTABLECIMIENTO:</label>
                <p class="control-label "><?php echo $row['establecimiento']; ?></p>
            </div>
            
            <!--BOTONES -->
            <a href="../inicio.php"> 
                <button class="btn btn-info btn-block"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp; Inicio</button> 
            </a>
            <button class="btn btn-success btn-block" onclick="editarDatos()"> 
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;&nbsp;Editar Mis Datos
            </button> 
        </div>

        <!--EDICION DE DATOS -->    
        <div class="col-md-4 col-lg-offset-5 data">
            <div id="fondoCerrar" onclick="cerrar()"> <p id="cerrar"> Cerrar X</p> </div>
            <center><h4 id="tituloActualizarDatos">Actualización de Datos </h4></center>
            <!--NOMBRE -->
            <form action="miPerfil.php" class="form-horizontal" method="POST" id="form_nombre" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">NOMBRE:</label>
                    <div class="input-group">                       
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>             
                        <input class="form-control" name="nombre" id="nombre" type="text" disabled value="<?php  echo $row['nombre']; ?>" >
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarNombre()">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div id="respuesta_nombre" >
                    
                    </div>
                    <input type="submit" class="btn btn-default botonGuardar" id="botonGuardarNombre" onclick="ActulizarNombre()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarNombre" onclick="CancelarNombre()" value="Cancelar">
                </div>
            </form>
            <!--APELLIDO -->
            <form action="miPerfil.php" class="form-horizontal " method="post" id="form_apellido" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label">APELLIDO:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>                 
                        <input class="form-control" name="apellido" id="apellido" type="text" disabled value="<?php  echo $row['apellido']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarApellido()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="submit" class="btn btn-default botonGuardar" id="botonGuardarApellido" onclick="ActulizarApellido()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarApellido" onclick="CancelarApellido()" value="Cancelar">
                </div>
            </form>
            <!--ESTABLECIMIENTO -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_establecimiento" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">ESTABLECIMIENTO:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></div>                 
                        <input class="form-control" name="establecimiento" id="establecimiento" type="text" disabled value="<?php  echo $row['establecimiento']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarEstablecimiento()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="submit" class="btn btn-default botonGuardar" id="botonGuardarEstablecimiento" onclick="ActulizarEstablecimiento()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarEstablecimiento" onclick="CancelarEstablecimiento()" value="Cancelar">
                </div>
            </form>
            <!--PROFESION -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_profesion" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">PROFESION:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> </div>                 
                        <input class="form-control" name="profesion" id="profesion" type="text" disabled value="<?php  echo $row['profesion']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarProfesion()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="submit" class="btn btn-default botonGuardar" id="botonGuardarProfesion" onclick="ActulizarProfesion()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarProfesion" onclick="CancelarProfesion()" value="Cancelar">
                </div>
            </form>
            <hr style="margin-top:-5px;">
            <!--                 ACTUALIZAR SEGURIDAD             -->
            <center><h4 id="tituloActualizarDatos" style="margin-top:-15px">Actualización de Seguridad</h4></center><br>
            <!--NUEVO USUARIO -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_usuario" enctype="multipart/form-data" style="margin-top:-30px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">CAMBIAR USUARIO:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>                 
                        <input class="form-control" name="usuario" id="usuario" type="text" disabled value="<?php  echo $row['nom_usuario']; ?>">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarUsuario()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="submit" class="btn btn-default botonGuardar" id="botonGuardarrUsuario" onclick="ActulizarrUsuario()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarrUsuario" onclick="CancelarrUsuario()" value="Cancelar">
                </div>
            </form>
            <!-- NUEVA CONTRASEÑA -->
            <form action="miPerfil.php" class="form-horizontal" method="post" id="form_contrasenia" enctype="multipart/form-data" style="margin-top:-10px"><!--Permite dar saltos de espacios entre filas -->
                <div class="form-group"><!--Agrupacion -->
                    <label class="control-label ">CAMBIAR CONTRASEÑA:</label>
                    <div class="input-group">    
                        <div class="input-group-addon"><i class="fa fa-key fa-lg" aria-hidden="true"></i> </div>                 
                        <input class="form-control" name="contrasenia" id="contrasenia" type="password" disabled placeholder="Ingresar Nueva Contraseña">
                        <div class="input-group-addon" style="cursor:pointer" onclick="habilitarContrasenia()">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                    </div>
                    <input type="submit" class="btn btn-default botonGuardar" id="botonGuardarContrasenia" onclick="ActulizarContrasenia()" value="Guardar Cambios">
                    <input type="button" class="btn btn-default botonCancelar"id="botonCancelarContrasenia" onclick="CancelarContrasenia()" value="Cancelar">
                </div>
            </form>

            
        </div>
        
        <!--fondo de portada --> 
        <div class="col-md-9 fondoPortada" >
            <a href="#"> <img class="img-responsive portada" src="../img/portada.jpg"> </a>
        </div>  
    </div>

   <script src="jquery-3.2.1.js"></script>   
   <script src="../js/bootstrap.min.js" ></script>
   <script src="actualizar.js"></script>    
</body>
</html>