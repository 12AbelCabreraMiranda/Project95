<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");  
 
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM estudiante WHERE idEstudiante = '".$_POST["employee_id"]."' ";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>