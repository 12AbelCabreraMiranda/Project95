<html>  
    <head>  
		<title>Mis Alumnos</title>  
		<link rel="icon" href="../img/android.png">
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="estilo_tabla_misAlumnos.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
					<h1 id="tituloINICIO"> Mis Alumnos y sus Examenes Realizados</h1>
				</div>         
			</div>
		</div>
        <div class="container">
			<br />			
			<br/><br/>
			<!-- MENUS DE LOS CURSOS-->
            <div class="col-lg-2 list-group">     
                <a  class="list-group-item" onclick="todos()" id="todos">TODOS</a>
                <a  class="list-group-item" onclick="evaluados()" id="evaluados">EVALUADOS</a>
                <a href="../inicio.php"> <button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</button> </a>                
            </div>
			<!--Muestra TODO LOS ESTUDIANTES --> 
			<div class="col-lg-6 col-lg-offset-1" id="todosALumnos" >
                <!-- TABLA  CURSO VOCALES-->    
                <div class="table-responsive " style="border-radius:5px" id="employee_table">
					
					<table class="table table-striped table-bordered table-hover table-condensed">  
						<tr class="info"><td  style="text-align:center" colspan="5" rowspan="1">MIS ALUMNOS REGISTRADOS</td></tr>                      
                        <tr class="success">
                            <th style="text-align:center">CODIGO</th>
                            <th style="text-align:center">NOMBRE</th>
                            <th style="text-align:center">APELLIDO</th>                            
							<th style="text-align:center">EDAD</th> 
							<th style="text-align:center">Editar</th> 							
							                           
                        </tr>
                        <!-- CODIGO PHP-->
                        <?php
						include("../bd/conexion.php");						
                        $usuLogeado = $_SESSION['u_usuario'];
    
                         //SELECCION USUARIO para extraer id del maestro logeado
                        $ids;
                        $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
                        $result1 = $conexion->query($query1);
                        if($row = $result1->fetch_assoc()){      
                            $ids =$row['id_maestroU'];
                        }
	
						$connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje"); 
						$query="SELECT *from estudiante WHERE id_usuario_maestro ='$ids' ORDER BY idEstudiante DESC ";
						$result = mysqli_query($connect, $query); 

                        //$resultado=$conexion->query($query);
                        while($row=mysqli_fetch_array($result)){
                        ?>  
                            <tr style="background: #ffffff">
                                <td class="codigoAlumno"> <?php echo $row['codigoEstudiante']; ?> </td>
                                <td> <?php echo $row['nombre']; ?> </td>
                                <td> <?php echo $row['apellido']; ?> </td>
								<td style="text-align:center"> <?php echo $row['edad']; ?> </td>  
								<td><input type="button" name="edit" value="Edit" id="<?php echo $row["idEstudiante"]; ?>" class="btn btn-info btn-xs edit_data" /></td>                                 
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
		<!-- UPDATE -->
	<div id="add_data_Modal" class="modal fade">  
      	<div class="modal-dialog">  
           	<div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>CODIGO</label>  
                          <input type="text" name="codigo" id="codigo" class="form-control" />  
                          <br />  
                          <label>NOMBRE</label>  
                          <input type="text" name="nombre" id="nombre" class="form-control" />                           
                          <br />  
                          <label>APELLIDO</label>  
                          <input type="text" name="apellido" id="apellido" class="form-control" />  
                          <br />  
                          <label>EDAD</label>  
                          <input type="text" name="edad" id="edad" class="form-control" />  
						  <br />  
						  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           	</div>  
      	</div>  
	 </div> 
	 
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


	//update


      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#codigo').val(data.codigo);  
                     $('#nombre').val(data.nombre);  
                     $('#apellido').val(data.apellido);  
                     $('#edad').val(data.edad);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#codigo').val() == "")  
           {  
                alert("codigo is required");  
           }  
           else if($('#nombre').val() == '')  
           {  
                alert("nombre is required");  
           }  
           else if($('#apellido').val() == '')  
           {  
                alert("apellido is required");  
           }  
           else if($('#edad').val() == '')  
           {  
                alert("edad is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  



});  


//update

 
</script>
