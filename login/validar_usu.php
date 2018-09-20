<?php
session_start();

    $usuario=$_POST['nombre_usuario'];
    $clave = $_POST['contrasenia'];

    //COnexion con la database
    include("../bd/conexion.php");
    include('seguridad.php');

    //VALIDACION CON ENCRIPTACIÓN DE PASSWORD
    $passEncriptado = SED::encryption($clave); 

    $proceso= $conexion->query("select *from usuario WHERE nom_usuario='$usuario' and contrasenia='$passEncriptado' ");

    if($resultado = mysqli_fetch_array($proceso)){
        $_SESSION['u_usuario'] = $usuario;
        header("Location: ../inicio.php");
    }else{
        echo "<script>
        alert('NO EXISTE EL USUARIO');
            window.location='login.php';
        </script>"; 
    }
        
?>