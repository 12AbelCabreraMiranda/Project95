<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
    //sentencia eliminar
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM pruebanombre WHERE idpruebaNombre = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Dato Eliminado</p>';
	}
}

?>