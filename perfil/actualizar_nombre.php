<?php

    include("../bd/conexion.php");
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];
    $nombre = $_POST["nombre"];

    $idMaestroLogeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $idMaestroLogeado =$row['id_maestroU'];
     }


    $query = "UPDATE maestro SET nombre='$nombre' where idmaestro='$idMaestroLogeado'";
    $resultado= $conexion->query($query);
    if($resultado){
        echo'Nombre Actualizado Exitosamente';
    }
    else{
        echo'No Actualizado';
    }


?>