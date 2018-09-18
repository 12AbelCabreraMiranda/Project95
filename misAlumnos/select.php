<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
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


      $query = "SELECT * FROM estudiante WHERE idEstudiante = '".$_POST["employee_id"]."' AND id_usuario_maestro ='$ids' ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>NOMBRE</label></td>  
                     <td width="70%">'.$row["nombre"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>APELLIDO</label></td>  
                     <td width="70%">'.$row["apellido"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>EDAD</label></td>  
                     <td width="70%">'.$row["edad"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>CODIGO DEL ALUMNO</label></td>  
                     <td width="70%">'.$row["codigoEstudiante"].'</td>  
                </tr>  
 
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>