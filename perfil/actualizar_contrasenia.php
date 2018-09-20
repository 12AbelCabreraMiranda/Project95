<?php

    include("../bd/conexion.php");
    include('../login/seguridad.php');

    session_start();
    $usuMaestro = $_SESSION['u_usuario'];
    $pass = $_POST["contrasenia"];

    $idMaestroLogeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuMaestro'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $idMaestroLogeado =$row['id_maestroU'];
     }

    //ENCRIPTACIÓN DE PASSWORD
    $passEncriptado = SED::encryption($pass);

    $query = "UPDATE usuario SET contrasenia='$passEncriptado' where id_maestroU='$idMaestroLogeado'";
    $resultado= $conexion->query($query);
    if($resultado){
        echo'Contraseña Actualizado Exitosamente';
    }
    else{
        echo'No Actualizado';
    }


?>