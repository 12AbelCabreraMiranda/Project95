<?php
   
include("../bd/conexion.php");

        $nombres = $_REQUEST["nombres"];        
        //SELECCION
        $PuntosAdquirido;
        $query1 = ("SELECT puntos FROM prueba_estudiante where nombre='$nombres'");
        $result1 = $conexion->query($query1);

        if($row = $result1->fetch_assoc()){
            $PuntosAdquirido=$row['puntos'];
            echo $PuntosAdquirido;
        }    

?>