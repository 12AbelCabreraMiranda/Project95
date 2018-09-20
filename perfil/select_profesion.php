<?php

    include("../bd/conexion.php");
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];

    $idMaestroLogeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $idMaestroLogeado =$row['id_maestroU'];
     }
    
    $profesion;
    $query = ("SELECT profesion FROM maestro where idmaestro='$idMaestroLogeado'");
    $result = $conexion->query($query);
    if($row1 = $result->fetch_assoc()){      
        $profesion =$row1['profesion'];
        echo $profesion;
     }
?>