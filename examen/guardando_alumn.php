<?php
   
include("../bd/conexion.php");

    $nombres = $_POST["elegir"];
    //INSERCION 
    $query  = "insert into prueba_estudiante(nombre) VALUES('$nombres')";
    $resultado= $conexion->query($query);

    if($resultado){
        echo $nombres;
    }
    else{
        echo'no insertado';
    }

        

?>

