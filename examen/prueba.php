<?php
   
include("../bd/conexion.php");
    $nom="AbelPrueba1";
    $puntos='8';
    $nombres = $_REQUEST["nombre"];



    $query  = "insert into prueba(nombre,puntos, id_estudiante) VALUES('$nom','$puntos','$nombres')";
    $resultado= $conexion->query($query);

    if($resultado){
        echo'Respuesta Correcto';
    }
    else{
        echo'no insertado';
    }
?>
