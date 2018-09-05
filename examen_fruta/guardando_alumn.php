<?php
   
include("../bd/conexion.php");

    $alumno = $_POST["elegir"];    
    $curso = 3;
    echo $alumno;

   
    //SELECCION
    $NombreCompleto;
    $query1 = ("SELECT id_estudianteA FROM mis_cursos where id_estudianteA='$alumno' AND id_cursoA='$curso' ");
    $result1 = $conexion->query($query1);

    //VALIDACION DE EXISTENCIA DE ALUMNO
    if($row = $result1->fetch_assoc()){
       $NombreCompleto=$row['id_estudianteA'];//Si ya existe 

        //Actualizar sus puntos (resetearlo a cero) para mejorar el punto
        $query2 = "UPDATE avancepuntos SET puntos=0 where id_estudiante='$NombreCompleto' AND id_curso='$curso' ";
        $resultad2= $conexion->query($query2);

    }else{
        //INSERCION 
        $query  = "INSERT into mis_cursos (id_estudianteA,id_cursoA) VALUES('$alumno','$curso')";
        $resultado= $conexion->query($query);

        if($resultado){
            echo $alumno;
        }
        else{
            echo'no insertado alumno';
        }
    }

?>

