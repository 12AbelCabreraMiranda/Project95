<?php

    include("../bd/conexion.php");
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];
    $usuaM = $_POST["usuario"];

    $idMaestroLogeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $idMaestroLogeado =$row['id_maestroU'];
     }

    $query = "UPDATE usuario SET nom_usuario='$usuaM' where id_maestroU='$idMaestroLogeado'";
    $resultado= $conexion->query($query);
    if($resultado){
        echo'Usuario Actualizado Exitosamente';
    }
    else{
        echo'No Actualizado';
    }


?>