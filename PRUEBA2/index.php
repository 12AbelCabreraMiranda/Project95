<html>  
    <head>  
        <title>PHP Ajax Crud using JQuery UI Dialog</title>  
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
		
    </head>  
    <body>  
        <div class="container">
			<br />			
			<h3 align="center">PHP Ajax Crud using JQuery UI Dialog</a></h3><br/><br/>
            
            <!--Muestra los datos consultados --> 
			<div class="table-responsive" id="datos"></div>
        </div>

        <!--ALERTA DE CONFIRMACION DEL DATO ELIMINADO --> 
		<div id="accion_alerta" title="Action"></div>
		
		<div id="confirmacion_eliminar" title="Confirmación">
		<p>¿Seguro que quieres borrar esta información?</p>
		</div>
		
    </body>  
</html>  

<!-- Codigos Ajax y Json --> 
<script>  
$(document).ready(function(){  

	load_data();
    
	function load_data() //ESTA FUNCION PERMITE TRAER LOS DATOS
	{
		$.ajax({
			url:"fetch.php",
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
	

	//FUNCION DE ELEMINAR
	$('#confirmacion_eliminar').dialog({ 
		autoOpen:false, //oculta el cuadro de dialogo
		//modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"action.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#confirmacion_eliminar').dialog('close'); 
						$('#accion_alerta').html(data);              
						$('#accion_alerta').dialog('open');         
						load_data();
					}
				});
			},
			Cancel : function(){
				$(this).dialog('close');
			}
		}	
	});
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		$('#confirmacion_eliminar').data('id', id).dialog('open');  
	});
	
});  
</script>
