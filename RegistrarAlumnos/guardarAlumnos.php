<?php
   
include("../bd/conexion.php");
session_start();
    $nombre =   $_POST["nombre"];    
    $apellido = $_POST["apellido"]; 
    $edad =     $_POST["edad"]; 
    $codigo =   $_POST["codigo"]; 
    $usuLogeado = $_SESSION['u_usuario'];

    //SELECCION USUARIO para extraer id del maestro logeado
    $id;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $id =$row['id_maestroU'];
     }

    //SELECCION Estudiante
    $codigo2;
    $query1 = ("SELECT *FROM estudiante where codigoEstudiante='$codigo'");
    $result1 = $conexion->query($query1);

    //VALIDACION DE EXISTENCIA DE ALUMNO
    if($row = $result1->fetch_assoc()){      
       echo 'Ya existe el Codigo ..!';
    }
    else{
        //INSERCION 
        $query  = "INSERT into estudiante (nombre,apellido,edad,codigoEstudiante,id_usuario_maestro) 
                                    VALUES('$nombre','$apellido','$edad','$codigo','$id')";
        $resultado= $conexion->query($query);

        if($resultado){
            echo'Alumno Registrado';
        }
        else{
            echo'no insertado alumno';
        }
    }

?>
