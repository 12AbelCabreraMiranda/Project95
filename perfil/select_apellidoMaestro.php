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
    
    $apellido;
    $query5 = ("SELECT apellido FROM maestro where idmaestro='$idMaestroLogeado'");
    $result5 = $conexion->query($query5);
    if($row5 = $result5->fetch_assoc()){      
        $apellido =$row5['apellido'];
        echo $apellido;
     }
?>