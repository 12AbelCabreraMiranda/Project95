<?php 
    session_start();
    include("conexion.php");

    $idcliente;
    $query3 = ("SELECT *FROM cursos");
    $result3 = $conexion->query($query3);
    if($row =  $result3->fetch_assoc()){        
        $idcliente=$row["idCursos"];

        $tama = count($idcliente);
            echo "<script>
            
            alert( '$tama');
            </script>"; 

       

    }