<?php
   
include("../bd/conexion.php");

    $nombres = $_POST["elegir"];
    $nom="AbelPrueba1";
    $puntos='8';
    echo $nombres;


    //SELECCION
    $NombreCompleto;
    $query1 = ("SELECT id_estudiante FROM prueba where id_estudiante='$nombres'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){
       $NombreCompleto=$row['id_estudiante'];
       //echo $NombreCompleto;

        //actualizar si ya existe
        $query2 = "UPDATE prueba_estudiante SET puntos=0 where nombre='$NombreCompleto'";
        $resultad2= $conexion->query($query2);

    }else{
        //INSERCION 
        $query  = "insert into prueba(nombre,puntos, id_estudiante) VALUES('$nom','$puntos','$nombres')";
        $resultado= $conexion->query($query);
    
        if($resultado){
            echo $nombres;
        }
        else{
            echo'no insertado';
        }
    }




    

        

?>

