<?php
   
include("../bd/conexion.php");

    $nombres = $_POST["elegir"];
    //$init_prof = $_SESSION['u_usuario']; //agregado PENDIENTE

    //CONSULTA DE MAESTRO LOGEADO ---- PENDIENTE
    /*
    $idUsuario_logeado;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='".$init_prof."' ");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){
        $idUsuario_logeado=$row['idUsuario'];    
    }*/

    //SELECCION
    $NombreCompleto;
    $query1 = ("SELECT idEstudiante, nombre FROM estudiante where idEstudiante='$nombres' ");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){
        $NombreCompleto=$row['nombre'];
        echo $NombreCompleto;
    }    

?>