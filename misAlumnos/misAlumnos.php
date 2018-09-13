

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis Notas</title>        
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--No funciona los iconos -->   
    <link rel="stylesheet" href="estilo_tabla_misAlumnos.css">     
</head>
<body>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS        
        session_start();
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: ../login/login.php");
        }
    ?>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 navegacion">
                <h1 id="tituloINICIO">“APLICACIÓN EDUCATIVA PARA EL APRENDIZAJE DEL HABLA NIVEL DE EDUCACIÓN PRE-PRIMARIA”</h1>
            </div>         
        </div>
        <div class="row">
            <!-- TABLAS-->
            <div class="col-lg-6 col-lg-offset-2"> <br><br>
                <!-- TABLA  CURSO VOCALES-->    
                <div class="table-responsive scrollable " style="border-radius:5px" id="tabla_vocal">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <tr class="warning"><td  style="text-align:center" colspan="5" rowspan="1">CURSO ASIGNADO: "VOCALES"</td></tr>
                        <tr class="success">
                            <th style="text-align:center">CODIGO</th>
                            <th style="text-align:center">NOMBRE</th>
                            <th style="text-align:center">APELLIDO</th>                            
                            <th style="text-align:center">EDAD</th>
                            <th style="text-align:center">Examen Hecho</th>
                        </tr>
                        <!-- CODIGO PHP-->
                        <?php
                        include("../bd/conexion.php");
                        $usuLogeado = $_SESSION['u_usuario'];
    
                         //SELECCION USUARIO para extraer id del maestro logeado
                        $id;
                        $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
                        $result1 = $conexion->query($query1);
                        if($row = $result1->fetch_assoc()){      
                            $id =$row['id_maestroU'];
                        }
    
                        $query="SELECT *from mis_estudiantes_y_cursos WHERE id_usuario_maestro ='$id' ";
                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                        ?>  
                            <tr style="background: #ffffff">
                                <td class="codigoAlumno"> <?php echo $row['codigoEstudiante']; ?> </td>
                                <td> <?php echo $row['nombre']; ?> </td>
                                <td> <?php echo $row['apellido']; ?> </td>
                                <td> <?php echo $row['edad']; ?> </td>
                                <td style="text-align:center"> 
                                    <button class="btn btn-success" onclick="detalleCursos().<?php echo $row['codigoEstudiante']; ?>">                                        
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 
                                        <span class="badge"><?php echo $row['cant_examen_hecho']; ?></span>                                        
                                    </button>
                                </td>  
                                <!--pendiente extraer usar ajax -->  
                                <td><a href="pruebaCursosDetalles.php?id=<?php echo $row['codigoEstudiante']; ?>">mostrar</a> </td>                           
                            </tr>
                        <?php      
                            }
                        ?>
                    </table>
                </div>
            </div>
            <!-- MENUS DE LOS CURSOS-->
            <div class="col-lg-2 list-group"  id="detalle_cursos">   <br><br>     
                <p>detalles de cursos asignados</p>
                <button class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>cerrar</button>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="detalles_curso.js"></script>
    <script src="../js/bootstrap.min.js" ></script>
</body>
</html>