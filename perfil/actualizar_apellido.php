<?php

    include("../bd/conexion.php");
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];
    $apellido = $_POST["apellido"];

    $idMaestroLogeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $idMaestroLogeado =$row['id_maestroU'];
     }


    $query2 = "UPDATE maestro SET apellido='$apellido' where idmaestro='$idMaestroLogeado'";
    $resultado2= $conexion->query($query2);
    if($resultado2){
        echo'apellido Actualizado Exitosamente';
    }
    else{
        echo'No Actualizado';
    }


?>