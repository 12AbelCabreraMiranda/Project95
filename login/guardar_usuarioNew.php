<?php 
    session_start();
    include("database/conexion.php");

    $nom = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    $usua;
    $pass;
    $query = ("SELECT nombre_usuario, password FROM usuarios where nombre_usuario='".$usuario."' and password = '".$contrasenia."'");
    $result = $conexion->query($query);
    if($row =  $result->fetch_assoc()){
        $usua =$row['nombre_usuario'];
        $pass =$row['password'];
        echo "<script>
        alert('YA EXISTE el USUARIO');
            window.location='registrarse.php';
        </script>"; 
        

    }else{
        $query2="insert into empleados (nombre, apellido, direccion, celular, estado) 
        values('$nom','$apellido','$direccion','$telefono',1)";
        $resultad2= $conexion->query($query2);

        //SELECT EMPLEADO
        $id_empleado;
        $query3 = ("SELECT idempleados FROM empleados where nombre='".$nom."' and apellido = '".$apellido."'");
        $result3 = $conexion->query($query3);
        if($row =  $result3->fetch_assoc()){
            $id_empleado =$row['idempleados'];
        }
        //insert en USUARIO
        $query4="insert into usuarios (nombre_usuario, password, id_tipo_usuario, id_empleado) 
        values('$usuario ','$contrasenia',2,'$id_empleado')";
        $resultad4= $conexion->query($query4);
        
        $proceso= $conexion->query("select *from vista_usuarios WHERE nombre_usuario='$usuario' and password='$contrasenia' ");
        if($resultado = mysqli_fetch_array($proceso)){
            $_SESSION['usuario'] = $usuario;
            header("Location: administrador.php");
        }else{
            //header("Location: login.php");
        }
    }

