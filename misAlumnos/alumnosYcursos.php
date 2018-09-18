<?php   
session_start();   
     include("../bd/conexion.php");	
     $connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");					
     $usuLogeado = $_SESSION['u_usuario'];

      //SELECCION USUARIO para extraer id del maestro logeado
     $idss;
     $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
     $result1 = $conexion->query($query1);
     if($row = $result1->fetch_assoc()){      
         $idss =$row['id_maestroU'];
     }
      
    $query = "SELECT codigoEstudiante,nombre,apellido,edad FROM mis_estudiantes_y_cursos where id_usuario_maestro ='$idss' ";  
    $result = mysqli_query($connect, $query);  
 ?>  
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

		<!-- LINK-->	                          
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap.min.css">

    </head>  
    <body>  
		<!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
		<?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS                
			
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
                <!-- TABLA  con AJAX Y JSON-->                   
                <?php include('index.php');?>
			</div>			
			<!--Muestra los datos consultados con ajax --> 
			<div class="col-lg-10" id="datos">
				<!-- <div class="table-responsive" id="datos"></div>-->
				<?php include('susCursos.php');?>
			</div> 
        </div>

		<!--ALERTA DE CONFIRMACION DEL DATO ELIMINADO --> 		
		<div id="accion_alerta" title="cerrar"></div>		
    </body>  
</html>  


	 

