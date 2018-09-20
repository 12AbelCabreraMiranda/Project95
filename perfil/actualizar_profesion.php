<?php

    include("../bd/conexion.php");
    session_start();
    $usuMaestro = $_SESSION['u_usuario'];
    $profesion = $_POST["profesion"];

    $idMaestroLogeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $idMaestroLogeado =$row['id_maestroU'];
     }


    $query2 = "UPDATE maestro SET profesion='$profesion' where idmaestro='$idMaestroLogeado'";
    $resultado2= $conexion->query($query2);
    if($resultado2){
        echo'Profesión Actualizado Exitosamente';
    }
    else{
        echo'No Actualizado';
    }


?>