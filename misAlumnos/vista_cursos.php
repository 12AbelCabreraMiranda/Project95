<?php  
 if(isset($_POST["employee_ids"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");   


      $query = "SELECT codigoEstudiante,nombreCurso FROM estudianteysuscursos WHERE codigoEstudiante = '".$_POST["employee_ids"]."' ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">
                <tr>
                        
                    <th>CODIGO</th>
                    <th>CURSOS</th>		

                </tr>
           ';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>
                    <td >'.$row["codigoEstudiante"].'</td>
                    <td >'.$row["nombreCurso"].'</td>						
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