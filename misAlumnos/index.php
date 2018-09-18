<?php  
    //  PERMITE MOSTRAR TODO LOS ESTUDIANTES CON BOTONES: UPDATE Y VIEW Y DELETE
        
     include("../bd/conexion.php");	
     $connect = mysqli_connect("localhost", "root", "", "desarrollo_aprendizaje");					
     $usuLogeado = $_SESSION['u_usuario'];

      //SELECCION USUARIO para extraer id del maestro logeado
     $ids;
     $query1 = ("SELECT id_maestroU FROM usuario where nom_usuario='$usuLogeado'");
     $result1 = $conexion->query($query1);
     if($row = $result1->fetch_assoc()){      
         $ids =$row['id_maestroU'];
     }
      
    $query = "SELECT * FROM estudiante WHERE id_usuario_maestro ='$ids' ORDER BY nombre asc";  
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
           <div class="container" style="width:700px;">                  
                <div class="table-responsive">  
                     <!-- <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
                     <br />  
                    </div>  -->
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th style="text-align:center" width="70%">NOMBRE DEL ESTUDIANTE</th>  
                                    <th style="text-align:center" width="15%">EDITAR</th>  
                                    <th style="text-align:center" width="15%">VISUALIZAR</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["nombre"]; ?></td>  
                                    <td style="text-align:center">                                                                                
                                        <button type="button" name="edit" class="btn btn-warning btn-sm edit_data" id="<?php echo $row["idEstudiante"]; ?>">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><b> Editar </b>
                                        </button>
                                    </td>  

                                    <td style="text-align:center">                                        
                                        <button type="button" name="view" class="btn btn-success btn-sm view_data" id="<?php echo $row["idEstudiante"]; ?>">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><b> Ver </b>
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
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header" style="background:#023e72; color:white">  
                     <button style="color:white" type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 style="text-align:center" class="modal-title">DATOS DEL ESTUDIANTE</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">MÉTODO DE ACTUALIZACIÓN DE DATOS</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>NOMBRE</label>  
                          <input type="text" name="nombre" id="nombre" class="form-control" />  
                          <br />  
                          <label>APELLIDO</label>                            
                          <input type="text" name="apellido" id="apellido" class="form-control" />   
                          <br />  
                          <label>EDAD</label>  
                          <input type="text" name="edad" id="edad" class="form-control" />  
                          <br />  
                          <label>CODIGO ESTUDIANTE</label>  
                          <input type="text" name="codigoEstudiante" id="codigoEstudiante" class="form-control" />  
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
    <script>  
    $(document).ready(function(){  
        
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
                        $('#nombre').val(data.nombre);  
                        $('#apellido').val(data.apellido);                       
                        $('#edad').val(data.edad);  
                        $('#codigoEstudiante').val(data.codigoEstudiante);                       
                        $('#employee_id').val(data.idEstudiante); // data.idEstudiante (de la base de dato)
                        $('#insert').val("Update");  
                        $('#add_data_Modal').modal('show');  
                    }  
            });  
        });  
        
        $('#insert_form').on("submit", function(event){  
            event.preventDefault();  
            if($('#nombre').val() == "")  
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
            else if($('#codigoEstudiante').val() == '')  
            {  
                    alert("codigoEstudiante is required");  
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

        //VISTA DE SLECCION DEALUMNOS
        $(document).on('click', '.view_data', function(){  
            var employee_id = $(this).attr("id");  
            if(employee_id != '')  
            {  
                    $.ajax({  
                        url:"select.php",  
                        method:"POST",  
                        data:{employee_id:employee_id},  
                        success:function(data){  
                            $('#employee_detail').html(data);  
                            $('#dataModal').modal('show');  
                        }  
                    });  
            }            
        });  
    });  
    </script>