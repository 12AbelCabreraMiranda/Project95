<?php

include("../bd/conexion.php");
include('seguridad.php');
session_start();
$usuLogeado = $_SESSION['u_usuario'];


//SELECCION USUARIO para extraer id del maestro logeado
$pass;
$query = ("SELECT contrasenia FROM usuario where nom_usuario='$usuLogeado'");
$resultado = $conexion->query($query);
if($row = $resultado->fetch_assoc()){      
    $pass =$row['contrasenia'];
 }


 //DESENCRIPTACIÓN DE PASSWORD
$passDesencriptado = SED::decryption($pass);
echo $passDesencriptado;