<?php
   
include("bd/conexion.php");

    $nombreFruta = $_POST["nomIMG"];
    $Imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $cursos = $_POST['curso'];//Extrae el ID  

    $query  = "insert into imagenes(nombreImagen,imagen,id_cursoI) VALUES('$nombreFruta','$Imagen','$cursos')";
    $resultado= $conexion->query($query);

    if($resultado){
        echo'Insertado';
    }
    else{
        echo'no insert';
    }
    //echo $nombre;
        //Permite ver la descripcion dela imagen
        /*
    foreach($img as $key => $value){
        echo $key." : ".$value."<br>";
    }*/
  

?>
