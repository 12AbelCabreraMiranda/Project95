<?php  

$connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");
 

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
        WHERE id='".$_POST["employee_id"]."' "; 

        $message = 'Data Updated'; 
        
        //formulario de tabla
        /*$output .= '<label class="text-success">' . $message . '</label>';  
        $select_query = "SELECT * FROM estudiante ORDER BY id DESC";  
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
                        <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                        <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                    </tr>  
            ';  
        }  
        $output .= '</table>'; */
      }  
      else  
      {  
           $query = "  
           INSERT INTO estudiante(nombre, apellido, edad, codigoEstudiante)  
           VALUES('$nombre', '$apellido', '$edad', '$codigo'); ";  
           $message = 'Data Inserted';  
      }  

      
        if(mysqli_query($connect, $query))  
        {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM estudiante ORDER BY id DESC";  
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
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
        }  
        echo $output; 
 }  







 ?>
 