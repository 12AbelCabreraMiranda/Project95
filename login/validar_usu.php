<?php
session_start();

    $usuario=$_POST['usuario'];
    $clave = $_POST['contrasenia'];

//COnexion con la database
include("database/conexion.php");

        $proceso= $conexion->query("select *from vista_usuarios WHERE nombre_usuario='$usuario' and password='$clave' ");

        if($resultado = mysqli_fetch_array($proceso)){
            $_SESSION['u_usuario'] = $usuario;
            header("Location: administrador.php");
        }else{
            header("Location: login.php");
        }
        
?>