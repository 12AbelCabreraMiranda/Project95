<?php
   
include("../bd/conexion.php");
    $nombres = $_REQUEST["nombre"];

    $query  = "insert into prueba_estudiante(nombre) VALUES('$nombres')";
    $resultado= $conexion->query($query);

    if($resultado){
        echo'Respuesta Correcto';
    }
    else{
        echo'no insertado';
    }
?>
