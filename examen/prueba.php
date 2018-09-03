<?php
   
include("../bd/conexion.php");
    $id_estudiante = $_REQUEST["nombre"];
    $id_curso=6;
    $init_punto = 1;

     //SELECCION
     $NombreCompleto;
     $puntaje;
     $query1 = ("SELECT id_estudiante, puntos FROM avancepuntos where id_estudiante='".$id_estudiante."'");//PENDIENTE validar de si ya llevó el curso tambien 
     $result1 = $conexion->query($query1);
     if($row = $result1->fetch_assoc()){
        $NombreCompleto=$row['id_estudiante'];
        $puntaje=$row['puntos'];

        $suma =1; 
         //actualizar si ya existe
        $query2 = "UPDATE avancepuntos SET puntos=$suma+'$puntaje' where id_estudiante='$NombreCompleto'";
        $resultad2= $conexion->query($query2);
         
     }else{
         $query  = "insert into avancepuntos(id_estudiante, id_curso, puntos) VALUES('$id_estudiante','$id_curso','$init_punto')";
         $resultado= $conexion->query($query);
     
         if($resultado){
             echo'Respuesta Correcto';
         }
         else{
             echo'no insertado';
         }
     }
    
?>
