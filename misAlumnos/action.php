<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{

	 //SELECCION 
	 	$query = "SELECT codigoEstudiante,nombre,apellido,nombreCurso FROM estudianteYsusCursos WHERE codigoEstudiante = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$total_row = $statement->rowCount();
		$output = '
		<table class="table table-striped table-bordered">
			<tr>
				
			 <th>CODIGO</th>
			 <th>CURSOS</th>		

			</tr>
		';
		if($total_row > 0)
		{
			foreach($result as $row)
			{
				$output .= '
				<tr>
					<td >'.$row["codigoEstudiante"].'</td>
					<td >'.$row["nombreCurso"].'</td>						
				</tr>
				';
			}
		}

		else
		{
			$output .= '
			<tr>
				<td colspan="4" align="center">Datos no encontrados</td>
			</tr>
			';
		}
		$output .= '</table>';
		echo $output;

}

?>