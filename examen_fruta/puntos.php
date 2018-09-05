<?php
   
include("../bd/conexion.php");

        $idAlumno = $_REQUEST["nombres"]; 
            
        //SELECCION
        $PuntosAdquirido;
        $query1 = ("SELECT puntos FROM avancepuntos where id_estudiante='$idAlumno' and id_curso=3 ");
        $result1 = $conexion->query($query1);

        if($row = $result1->fetch_assoc()){
            $PuntosAdquirido=$row['puntos'];
            echo $PuntosAdquirido;
        }    

?>