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
    
    $establecimiento;
    $query = ("SELECT establecimiento FROM maestro where idmaestro='$idMaestroLogeado'");
    $result = $conexion->query($query);
    if($row1 = $result->fetch_assoc()){      
        $establecimiento =$row1['establecimiento'];
        echo $establecimiento;
     }
?>