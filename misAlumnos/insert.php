<?php  

    $connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");
    session_start();
    include("../bd/conexion.php");	
    $usuLogeado = $_SESSION['u_usuario'];

    //SELECCION USUARIO para extraer id del maestro logeado
    $ids;
    $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
    $result1 = $conexion->query($query1);
    if($row = $result1->fetch_assoc()){      
        $ids =$row['id_maestroU'];
    }
    //UPDATE
    if(!empty($_POST))  
    {  
        $output = '';  
        $message = '';  
        $nombre = mysqli_real_escape_string($connect, $_POST["nombre"]);  
        $apellido = mysqli_real_escape_string($connect, $_POST["apellido"]);  
        $edad = mysqli_real_escape_string($connect, $_POST["edad"]);  
        $codigo = mysqli_real_escape_string($connect, $_POST["codigoEstudiante"]);  
        
        if($_POST["employee_id"] != '')  
        {  
            $query = "
            UPDATE estudiante 
            SET nombre='$nombre',
            apellido='$apellido',
            edad='$edad',
            codigoEstudiante='$codigo' 
            WHERE idEstudiante='".$_POST["employee_id"]."'
            AND id_usuario_maestro ='$ids' "; 

            $message = 'Data Updated'; 
        }  
        else  
        {  
            $query = "  
            INSERT INTO estudiante(nombre, apellido, edad, codigoEstudiante, id_usuario_maestro)  
            VALUES('$nombre', '$apellido', '$edad', '$codigo','$ids'); ";  
            $message = 'Data Inserted';  
        }  
        
            if(mysqli_query($connect, $query))  
            {  
            $output .= '<label class="text-success">' . $message . '</label>';  
            $select_query = "SELECT * FROM estudiante WHERE id_usuario_maestro ='$ids' ORDER BY nombre asc";  
            $result = mysqli_query($connect, $select_query);  
            $output .= '  
                    <table class="table table-bordered">  
                        <tr>  
                            <th width="70%">Employee Name</th>  
                            <th width="15%">Edit</th>  
                            <th width="15%">View</th>  
                        </tr>  
            ';  
            while($row = mysqli_fetch_array($result))  
            {  
                    $output .= '  
                            <tr>  
                                <td>' . $row["nombre"] . '</td>  
                                <td><input type="button" name="edit" value="Edit" id="'.$row["idEstudiante"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                                <td><input type="button" name="view" value="view" id="' . $row["idEstudiante"] . '" class="btn btn-info btn-xs view_data" /></td>  
                            </tr>  
                    ';  
            }  
            $output .= '</table>';  
            }  
            echo $output; 
    }  







 ?>
 