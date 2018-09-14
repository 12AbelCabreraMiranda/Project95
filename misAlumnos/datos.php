<?php

//fetch.php
include("../bd/conexion.php");
include("database_connection.php");
session_start();
$usuLogeado = $_SESSION['u_usuario'];

//SELECCION USUARIO para extraer id del maestro logeado
$id;
$query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'  ");
$result1 = $conexion->query($query1);
if($row = $result1->fetch_assoc()){      
	$id =$row['id_maestroU'];
 }




//$query = "SELECT * FROM mis_estudiantes_y_cursos where id_usuario_maestro ='$id' ";
$query = "SELECT * FROM mis_estudiantes_y_cursos where id_usuario_maestro ='$id' ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered table-hover table-condensed"">
	<tr class="warning"><td  style="text-align:center" colspan="5" rowspan="1">MIS ALUMNOS EVALUADOS</td></tr>
	<tr >
		<th style="text-align:center">CODIGO</th>
		<th style="text-align:center">NOMBRE</th>		
		<th style="text-align:center">APELLIDO</th>
		<th style="text-align:center">EDAD</th>
		<th style="text-align:center">EXAMEN</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>			
			<td>'.$row["codigoEstudiante"].'</td>	
			<td>'.$row["nombre"].'</td>	
			<td>'.$row["apellido"].'</td>
			<td style="text-align:center">'.$row["edad"].'</td>
					
			<td style="text-align:center">
				<button class="btn btn-success">
					<span class="badge">'. $row['cant_examen_hecho'].'</span>                                        
				</button>

				<button type="button" name="delete" class="btn btn-warning btn-md delete" id="'.$row["codigoEstudiante"].'">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver
				</button>
			</td>
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
?>
