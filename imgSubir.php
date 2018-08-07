<?php
    //session_start();
    require('bd/conexion.php');
    $query = "select idCursos,nombreCurso from cursos";
    $resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPLOAD IMG</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        input,textarea,select{
            margin-top: 10px;
        }
    </style>

</head>
<body>
    
    <div class="container" >
        <div class="col-lg-6" >
            <center>
                <div id="respuesta"  >
                </div>

            </center>
            <form action="imgSubir.php" method="POST" id="insertar-pelicula" enctype="multipart/form-data" > <!-- enctype="multipart/form-data": sirve para cuando se envian archivos: pdf, img etc-->
                <input type="text" name="nomIMG" class="form-control" placeholder="Nombre de Imagen"  >
                <input type="file" name="imagen"  class="form-control">                
                <select name="curso"  class="form-control">
                    <?php while($row = $resultado->fetch_assoc()){  ?>
                    <option value="<?php echo $row['idCursos']; ?> ">
                    <?php  echo $row['nombreCurso']; ?> </option>
                    <?php }?>
                </select>
                <input onclick="insertarPelicula()" type="submit" value="Insertar Pelicula" class="form-control">
            </form>
        </div>
    </div>
<script src="js/imgSubir.js"></script>
</body>
</html>