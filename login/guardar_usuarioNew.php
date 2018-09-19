<?php 
    session_start();
    include("../bd/conexion.php");
    include('seguridad.php');

    $nom = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    $establecimiento = $_POST["establecimiento"];
    $profesion = $_POST["profesion"];

    //FECHA SISTEMA AL REGISTRARSE
    ini_set('date.timezone', 'America/Guatemala');
    $fecha_sistema = date("d-m-Y");
    //HORA SISTEMA AL REGISTRARSE
    ini_set('date.timezone', 'America/Guatemala');
    $hora_sistema = date ('H:i:s', time());

    $usua;
    $pass;
    $query = ("SELECT nom_usuario, contrasenia FROM usuario where nom_usuario='".$usuario."'");
    $result = $conexion->query($query);
    if($row =  $result->fetch_assoc()){
        $usua =$row['nom_usuario'];
        $pass =$row['contrasenia'];
        echo "<script>
        alert('YA EXISTE el USUARIO');
            window.location='registrarse.php';
        </script>";         
    }else{
        $query2="insert into maestro (nombre, apellido, establecimiento, profesion,fecha_registrado,hora_registrado, estado) 
        values('$nom','$apellido','$establecimiento','$profesion','$fecha_sistema','$hora_sistema',1)";
        $resultad2= $conexion->query($query2);

        //SELECT MAESTRO PARA CONSEGUIR SU ID
        $id_maestro;
        $query3 = ("SELECT idmaestro FROM maestro where nombre='".$nom."' and apellido = '".$apellido."'");
        $result3 = $conexion->query($query3);
        if($row =  $result3->fetch_assoc()){
            $id_maestro =$row['idmaestro'];
        }


        //ENCRIPTACIÓN DE PASSWORD
        $passEncriptado = SED::encryption($contrasenia);
        
        //insert en USUARIO         
        $query4="insert into usuario (nom_usuario, contrasenia, id_maestroU) values('$usuario ','$passEncriptado','$id_maestro')";
        $resultad4= $conexion->query($query4);
        
        $proceso= $conexion->query("select *from usuario WHERE nom_usuario='$usuario' and contrasenia='$passEncriptado' ");
        if($resultado = mysqli_fetch_array($proceso)){
            $_SESSION['u_usuario'] = $usuario;
            header("Location: ../inicio.php");
        }else{
            //header("Location: login.php");
        }

    }

