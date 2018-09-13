<html>  
    <head>  
		<title>Mis Alumnos</title>  
		<link rel="icon" href="../img/android.png">
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>		
    </head>  
    <body>  
        <div class="container">
			<br />			
			<h3 align="center">Alumnos y sus Examenes Realizados</a></h3><br/><br/>
            
            <!--Muestra los datos consultados --> 
			<div class="table-responsive" id="datos">			
			</div>
        </div>

		<!--ALERTA DE CONFIRMACION DEL DATO ELIMINADO --> 
		
		<div id="accion_alerta" title="Action"></div>
		
		
    </body>  
</html>  

<!-- Codigos Ajax y Json --> 
<script>  
$(document).ready(function(){  

	load_data();
    
	function load_data() //ESTA FUNCION PERMITE TRAER LOS DATOS
	{
		$.ajax({
			url:"datos.php",
			method:"POST",
			success:function(data)
			{
				$('#datos').html(data);
			}
		});
	}	
	
	$('#accion_alerta').dialog({ 
		autoOpen:false
	});	
	
	$(document).on('click', '.delete', function(){

		var id = $(this).attr("id");
		var action = 'delete';
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data)
				{					
					$('#accion_alerta').html(data);           
					$('#accion_alerta').dialog('open');       
					//load_data();
				}
			});		 		
	});
	
});  
</script>
