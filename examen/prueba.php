<?php
   
include("../bd/conexion.php");
    $nombres = $_REQUEST["nombre"];
    $punto = 1;

     //SELECCION
     $NombreCompleto;
     $puntaje;
     $query1 = ("SELECT nombre, puntos FROM prueba_estudiante where nombre='".$nombres."'");
     $result1 = $conexion->query($query1);
     if($row = $result1->fetch_assoc()){
        $NombreCompleto=$row['nombre'];
        $puntaje=$row['puntos'];

        $suma =1; 
         //actualizar si ya existe
        $query2 = "UPDATE prueba_estudiante SET puntos=$suma+'$puntaje' where nombre='$nombres'";
        $resultad2= $conexion->query($query2);
         
     }else{
         $query  = "insert into prueba_estudiante(nombre,puntos) VALUES('$nombres','$punto')";
         $resultado= $conexion->query($query);
     
         if($resultado){
             echo'Respuesta Correcto';
         }
         else{
             echo'no insertado';
         }
     }
    
?>
