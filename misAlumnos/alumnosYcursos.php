<html>  
    <head>  
		<title>Mis Alumnos</title>  
		<link rel="icon" href="../img/android.png">
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="estilo_tabla_misAlumnos.css">
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>	
		<script src="alumnosCursos.js"></script>		
    </head>  
    <body>  
	<!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
	<?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS                
		session_start();
		if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: ../login/login.php");
        }
    ?>
	<!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
	<div class="container-fluid">

		<div class="row">
             <div class="col-md-12 col-xs-12 navegacion">
                 <h1 id="tituloINICIO">“APLICACIÓN EDUCATIVA PARA EL APRENDIZAJE DEL HABLA NIVEL DE EDUCACIÓN PRE-PRIMARIA”</h1>
             </div>         
        </div>
	</div>
        <div class="container">
			<br />			
			<h3 align="center">Alumnos y sus Examenes Realizados</a></h3><br/><br/>
			<!-- MENUS DE LOS CURSOS-->
            <div class="col-lg-2 list-group">     
                <a  class="list-group-item" onclick="todos()" id="todos">TODOS</a>
                <a  class="list-group-item" onclick="evaluados()" id="evaluados">EVALUADOS</a>
                <a href="../inicio.php"> <button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</button> </a>                
            </div>
			<!--Muestra TODO LOS ESTUDIANTES --> 
			<div class="col-lg-6 col-lg-offset-1" id="todosALumnos" >
                <!-- TABLA  CURSO VOCALES-->    
                <div class="table-responsive " style="border-radius:5px" id="tabla_vocal">
                    <table class="table table-striped table-bordered table-hover table-condensed">  
						<tr class="info"><td  style="text-align:center" colspan="5" rowspan="1">MIS ALUMNOS REGISTRADOS</td></tr>                      
                        <tr class="success">
                            <th style="text-align:center">CODIGO</th>
                            <th style="text-align:center">NOMBRE</th>
                            <th style="text-align:center">APELLIDO</th>                            
                            <th style="text-align:center">EDAD</th>                            
                        </tr>
                        <!-- CODIGO PHP-->
                        <?php
						include("../bd/conexion.php");						
                        $usuLogeado = $_SESSION['u_usuario'];
    
                         //SELECCION USUARIO para extraer id del maestro logeado
                        $id;
                        $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
                        $result1 = $conexion->query($query1);
                        if($row = $result1->fetch_assoc()){      
                            $id =$row['id_maestroU'];
                        }
    
                        $query="SELECT *from estudiante WHERE id_usuario_maestro ='$id' ";
                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                        ?>  
                            <tr style="background: #ffffff">
                                <td class="codigoAlumno"> <?php echo $row['codigoEstudiante']; ?> </td>
                                <td> <?php echo $row['nombre']; ?> </td>
                                <td> <?php echo $row['apellido']; ?> </td>
                                <td style="text-align:center"> <?php echo $row['edad']; ?> </td>                                                                 
                            </tr>
                        <?php      
                            }
                        ?>
                    </table>
                </div>
			</div>
			
			<!--Muestra los datos consultados con ajax --> 
			<div class="col-lg-10">
				<div class="table-responsive" id="datos"></div>

			</div>
        </div>

		<!--ALERTA DE CONFIRMACION DEL DATO ELIMINADO --> 
		
		<div id="accion_alerta" title="cerrar"></div>
		
		
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
