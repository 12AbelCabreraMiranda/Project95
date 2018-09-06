<?php
   
include("../bd/conexion.php");
    $id_estudiante = $_REQUEST["nombre"];
    $id_curso=4;
    $init_punto = 1;

     //SELECCION EN LA TABLA avancepuntos
     $NombreCompleto;
     $cursoUpdate;
     $puntaje;
     $query1 = ("SELECT id_estudiante, id_curso, puntos FROM avancepuntos where id_estudiante='$id_estudiante' AND id_curso='$id_curso' ");
     $result1 = $conexion->query($query1);
     if($row = $result1->fetch_assoc()){
        $NombreCompleto=$row['id_estudiante'];
        $cursoUpdate=$row['id_curso'];
        $puntaje=$row['puntos'];

        $suma =1; 
         //actualizar si ya existe
        $query2 = "UPDATE avancepuntos SET puntos=$suma+'$puntaje' where id_estudiante='$NombreCompleto' AND id_curso='$id_curso' ";
        $resultad2= $conexion->query($query2);
         
     }else{
         $query  = "insert into avancepuntos(id_estudiante, id_curso, puntos) VALUES ('$id_estudiante','$id_curso','$init_punto')";
         $resultado= $conexion->query($query);
     
         if($resultado){
             echo'Respuesta Correcto';
         }
         else{
             echo'no insertado';
         }
     }
    
?>
