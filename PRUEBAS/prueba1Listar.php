<?php
    include 'prueba1Conexion.php';

    $conexion = new Conexion();
    $cnn = $conexion->getConexion();
     
    $sql = "select *from imagenes";
    $statement = $cnn->prepare($sql);
    $valor = $statement->execute();

    if($valor){
        while($resultado = $statement->fetch(PDO::FETCH_ASSOC)){
            $data["data"][] =$resultado;
        }
        echo json_encode($data);
    }else{
        echo "error";
    }

    $statement->closeCursor(); //liberando memoria
    $conexion = null;
