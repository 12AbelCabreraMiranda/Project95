<?php   
    //session_start();     
     include("../bd/conexion.php");	
     $connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");					
     $usuLogeado = $_SESSION['u_usuario'];

      //SELECCION USUARIO para extraer id del maestro logeado
     $ids;
     $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
     $result1 = $conexion->query($query1);
     if($row = $result1->fetch_assoc()){      
         $idss =$row['id_maestroU'];
     }
      
    $query = "SELECT * FROM mis_estudiantes_y_cursos where id_usuario_maestro ='$idss' and estado=1 ";  
    $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>MisAlumnos</title>  
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
           <div class="container" style="width:800px;">                  
                <div class="table-responsive">    
                    <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr style="background:#17844c; color:white">  
                                    <th style="text-align:center" width="8%">CÓDIGO</th> 
                                    <th style="text-align:center" width="15%">NOMBRE</th>                                        
                                    <th style="text-align:center" width="15%">APELLIDO</th> 
                                    <th style="text-align:center" width="10%">EDAD</th> 
                                    <th style="text-align:center" width="10%">CURSOS REALIZADOS</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["codigoEstudiante"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["apellido"]; ?></td>
                                    <td style="text-align:center"><?php echo $row["edad"]; ?></td>    
                                    
                                    <td style="text-align:center">
                                        <button class="btn btn-success btn-sm view_data2" id="<?php echo $row["codigoEstudiante"]; ?>">
                                            <span class="badge" ><?php echo $row['cant_examen_hecho'];?> </span>                                        
                                        </button>
                                        

                                        <button type="button" name="view" class="btn btn-info btn-sm view_data2" id="<?php echo $row["codigoEstudiante"]; ?>">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><b> VER </b>
                                        </button>
                                    
                                    </td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModals" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header" style="background:#023e72; color:white">  
                     <button style="color:white" type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" style="text-align:center"><b> EXAMENES REALIZADOS </b></h4>  
                </div>  
                <div class="modal-body" id="employee_details">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>  
                </div>  
           </div>  
      </div>  
 </div>  

    <script>  
    $(document).ready(function(){  
        

        //VISTA DE SLECCION DEALUMNOS
		$(document).on('click', '.view_data2', function(){  
            var employee_ids = $(this).attr("id");  
            if(employee_ids != '')  
            {  
                    $.ajax({  
                        url:"vista_cursos.php",  
                        method:"POST",  
                        data:{employee_ids:employee_ids},  
                        success:function(data){  
                            $('#employee_details').html(data);  
                            $('#dataModals').modal('show');  
                        }  
                    });  
            }            
        });


    });  
    </script>