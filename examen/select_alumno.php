<?php
   
include("../bd/conexion.php");

    $nombres = $_POST["elegir"];
    //SELECCION
    $NombreCompleto;
    $query1 = ("SELECT idEstudiante, nombre FROM estudiante where idEstudiante='".$nombres."'  ");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){
        $NombreCompleto=$row['nombre'];
        echo $NombreCompleto;
    }    

?>