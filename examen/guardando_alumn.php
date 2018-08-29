<?php
   
include("../bd/conexion.php");

    $nombres = $_POST["elegir"];
    $nom="AbelPrueba1";
    $puntos='8';
    
    //INSERCION 
    $query  = "insert into prueba(nombre,puntos, id_estudiante) VALUES('$nom','$puntos','$nombres')";
    $resultado= $conexion->query($query);

    if($resultado){
        echo $nombres;
    }
    else{
        echo'no insertado';
    }

        

?>

