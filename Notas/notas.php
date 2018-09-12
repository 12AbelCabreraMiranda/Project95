

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis Alumnos</title>        
    <link rel="icon" href="../img/android.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--No funciona los iconos -->   
    <link rel="stylesheet" href="estilo_tabla.css">     
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
            <div class="col-lg-2 col-lg-offset-2 list-group">   <br><br>     
                <a  class="list-group-item active">VOCALES</a>
                <a  class="list-group-item">ABECEDARIOS</a>
                <a  class="list-group-item">COLORES</a>
                <a  class="list-group-item">NÚMEROS</a>
                <a  class="list-group-item">FRUTAS</a>
                <a  class="list-group-item">ESCUELA</a>
                <a  class="list-group-item">CUERPO HUMANO</a>
                <a  class="list-group-item">ANIMALES</a>
                <a href="../inicio.php"> <button class="btn btn-success btn-block">Inicio</button> </a>
            </div>
            <div class="col-lg-6"> <br><br>
                <!-- TABLA DE ESTUDIANTES CON PUNTAJE-->    
                <div class="table-responsive scrollable " style="border-radius:5px">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <tr class="warning"><td style="text-align:center" colspan="5" rowspan="1">CURSO ASIGNADO: "VOCALES"</td></tr>
                        <tr class="success">
                            <th style="text-align:center">CODIGO</th>
                            <th style="text-align:center">NOMBRE</th>
                            <th style="text-align:center">APELLIDO</th>                            
                            <th style="text-align:center">PUNTOS</th>
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
    
                        $query="SELECT *from vocales_puntos WHERE id_usuario_maestro ='$id' ";
                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                        ?>  
                            <tr style="background: #ffffff">
                                <td> <?php echo $row['codigoEstudiante']; ?> </td>
                                <td> <?php echo $row['nombre']; ?> </td>
                                <td> <?php echo $row['apellido']; ?> </td>                                
                                <td style="text-align:center"> <?php echo $row['puntos']; ?> </td>
                            </tr>
                        <?php      
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.min.js" ></script>
</body>
</html>