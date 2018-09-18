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
                        
                    <th style="text-align:center">CODIGO ESTUDIANTE</th>
                    <th style="text-align:center">CURSOS EXAMINADOS</th>		

                </tr>
           ';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>
                    <td style="text-align:center" >'.$row["codigoEstudiante"].'</td>
                    <td style="text-align:center">'.$row["nombreCurso"].'</td>						
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