	<?php
 	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}


	$idusuario = $_SESSION['id_usuario'];

	
	$sql = "SELECT * FROM usuarios  

	WHERE id_usuario='$idusuario' ";



	$result = $mysqli->query($sql);

	$row = $result->fetch_assoc();



	?>
<<<<<<< HEAD
	<!DOCTYPE html>
	<html>

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">


	    <!DOCTYPE html>
	    <meta name="generator" content="Jekyll v4.1.1">
	    <title>Evaluación de Desempeño</title>



	    <!-- Bootstrap core CSS -->
	    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
	    <link rel="stylesheet" href="style.css" media="print">

	    <!-- Custom styles for this template -->
	    <br>

	    <div class="col-xs-1"></div>

	    <img src="imagenes/sfp.jpg">

	</head>

	<body>
	    <div class="container">


	        <br>
	        <header>

	            <center>
	                <h3>Metas</h3>
	            </center>

	        </header>
	        <hr class="red">


	        <table class="table table-striped">

	            <tbody>
	                <tr>
	                    <th scope="row">Nombre</th>
	                    <td><?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?>
	                        <?php  echo ($row['apellido_materno']); ?>
	                    </td>
	                    <td><b>RFC: </b><?php echo ($row['usuario']); ?></td>

	                </tr>
	                <tr>
	                    <th scope="row">Puesto</th>
	                    <td><?php  header("Content-Type: text/html;charset=utf-8"); echo ($row['puesto']); ?></td>
	                    <td><b>UR: </b><?php echo ($row['ur']); ?></td>
	                </tr>
	                <tr>
	                    <th scope="row">Nivel</th>
	                    <td><?php echo ($row['nivel']); ?></td>
	                    <td><b>CURP: </b><?php echo ($row['curp']); ?></td>
	                </tr>


	            </tbody>
	        </table>


	        <?php
=======
		<!DOCTYPE html>
		<html>
			  <head>
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			    <meta name="description" content="">


	<!DOCTYPE html>
			    <meta name="generator" content="Jekyll v4.1.1">
			    <title>Evaluación de Desempeño</title>

			  

			    <!-- Bootstrap core CSS -->
			  <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
			   

			    <!-- Custom styles for this template -->
			    <br>

			    <div class="col-xs-1"></div>

			    <img  src="imagenes/sfp.jpg">
 
 		   </head>
		  	<body>
		    <div class="container">

 					
		   		<br>
		   		 <header>
		    
		    		 <center><h3>Metas</h3></center>
		    
		   		 </header>
		   		  <hr class="red">
		        	

		        	<table  class="table table-striped">
		 
						 <tbody>
						    <tr>
						      <th scope="row">Nombre</th>
						      <td ><?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?>
						      </td>
						      <td><b>RFC:    </b><?php echo ($row['usuario']); ?></td>
						      
						    </tr>
						    <tr>
						      <th scope="row">Puesto</th>
						      <td><?php  header("Content-Type: text/html;charset=utf-8"); echo ($row['puesto']); ?></td>
						      <td><b>UR:    </b><?php echo ($row['ur']); ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Nivel</th>
						      <td><?php echo ($row['nivel']); ?></td>
						      <td><b>CURP:    </b><?php echo ($row['curp']); ?></td>
						    </tr>

						    
						  </tbody>
						</table>

				  
				 	   <?php
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851
 	
						require 'conexion.php';
					   

					  $idusuario = $_SESSION['id_usuario'];

		
						$sql = "SELECT * FROM metas  

						WHERE id_usuario='$idusuario' AND anio='2022' ";



						$result = $mysqli->query($sql);

						$row = $result->fetch_assoc();



						?>



<<<<<<< HEAD



	        <table class="table table-striped">
	            <thead>
	                <tr>
	                    <th align="center" scope="col">No.</th>
	                    <th align="center" scope="col">Funcion</th>

	                </tr>
	            </thead>
	            <tbody>
	                <tr>
	                    <th scope="row">1</th>
	                    <td><input type="text" class="form-control" id="disabledTextInput" class="form-control"
	                            placeholder="<?php  echo ($row['funcion1']); ?>"> </td>

	                </tr>
	                <tr>
	                    <th scope="row">2</th>
	                    <td><input type="text" class="form-control" id="disabledTextInput" class="form-control"
	                            placeholder="<?php  echo ($row['funcion2']); ?>"> </td>

	                </tr>
	                <tr>
	                    <th scope="row">3</th>
	                    <td><input type="text" class="form-control" id="disabledTextInput" class="form-control"
	                            placeholder="<?php  echo ($row['funcion3']); ?>"> </td>

	                </tr>

	                <tr>
	                    <th scope="row">4</th>
	                    <td><input type="text" class="form-control" id="disabledTextInput" class="form-control"
	                            placeholder="<?php  echo ($row['funcion4']); ?>"> </td>

	                </tr>


	            </tbody>
	        </table>

	        <center>
	            <h5>Meta 1
	            </h5>
	        </center>

	        <table class="table table-striped">

	            <tbody>
	                <tr>

	                    <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
	                            disabled><?php  echo ($row['meta1']); ?></textarea> </td>

	                </tr>



	            </tbody>
	        </table>





	        <!-- Meta2 -->


	        <center>
	            <h5>Meta 2
	            </h5>
	        </center>

	        <table class="table table-striped">

	            <tbody>
	                <tr>

	                    <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
	                            disabled><?php  echo ($row['meta2']); ?></textarea> </td>

	                </tr>


	            </tbody>
	        </table>



	        <!-- Meta3 -->
			<br><br>

	        <center>
	            <h5>Meta 3
	            </h5>
	        </center>

	        <table class="table table-striped">

	            <tbody>
	                <tr>

	                    <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
	                            disabled><?php  echo ($row['meta3']); ?></textarea> </td>

	                </tr>



	            </tbody>
	        </table>
			<br>

	        <!-- Meta 4 -->


	        <center>
	            <h5>Meta 4
	            </h5>
	        </center>

	        <table class="table table-striped">

	            <tbody>
	                <tr>

	                    <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
	                            disabled><?php  echo ($row['meta4']); ?></textarea> </td>

	                </tr>



	            </tbody>
	        </table>



	        <div class="col-xs-4 col-sm-4 col-md-4">
	            <hr class="">
	            <center>
	                <h5>
	                    <?php
=======
				 


				 	<table class="table table-striped">
						  <thead>
						    <tr>
						      <th align="center" scope="col">No.</th>
						      <th align="center" scope="col">Funcion</th>
						     
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion1']); ?>"> </td>
						      
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion2']); ?>"> </td>
						      
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion3']); ?>"> </td>
						      
						    </tr>

						    <tr>
						      <th scope="row">4</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion4']); ?>"> </td>
						      
						    </tr>
						   
						    
						  </tbody>
						</table>

				 <br>
				
				 <br>

				  

				
				  <center><h5>Meta 1
				  </h5></center>
				  	
				<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php  echo ($row['meta1']); ?></textarea> </td>
						      
						    </tr>


						   
						</tbody>
				</table>
						

						
						

						<!-- Meta2 -->

						
				        <center><h5>Meta 2
				  		</h5></center>

						<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"disabled><?php  echo ($row['meta2']); ?></textarea> </td>
						      
						    </tr>


						     </tbody>
						</table>
						
					

						<!-- Meta3 -->

						
				        <center><h5>Meta 3
				  		</h5></center>

						<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php  echo ($row['meta3']); ?></textarea> </td>
						      
						    </tr>


						    
						     </tbody>
						</table>
						
						
						<!-- Meta 4 -->

						
				        <center><h5>Meta 4
				  		</h5></center>

						<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php  echo ($row['meta4']); ?></textarea> </td>
						      
						    </tr>


						   
						     </tbody>
						</table>
				<br>
				
				


				<div class="col-xs-4 col-sm-4 col-md-4" >
				<hr class="">
				<center><h5>
				<?php
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851


					require 'conexion.php';
						
					$idusuario = $_SESSION["id_usuario"];

					$sql01= "'";

					$sql1= "SELECT * FROM usuarios WHERE id_usuario='$idusuario'";

					$result4 = $mysqli->query($sql1);

					$row31 = $result4->fetch_assoc();

					$ap1=$row31['apellido_paterno'];
					$am1=$row31['apellido_materno'];
					$n1=$row31['nombre'];

					echo $n1,' ',$ap1,' ', $am1;
				?>
<<<<<<< HEAD



	                </h5>
	            </center>

	            <center>
	                <h5>Firma del trabajador(a)</h5>
	            </center>

	        </div>



	        <div class="col-xs-4 col-sm-4 col-md-4">
	            <hr class="">
	            <center>
	                <h5><?php
=======
		

				
								</h5></center>

				<center><h5>Firma del trabajador(a)</h5></center>

				</div>

			
				
				<div class="col-xs-4 col-sm-4 col-md-4" >
				<hr class="">
				<center><h5><?php
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851


					require 'conexion.php';
						
					$idusuario = $_SESSION["id_usuario"];
					



					$sql= "SELECT * FROM usuarios WHERE usuario IN (SELECT rfc_superior FROM metas WHERE id_usuario='$idusuario' AND anio='2022')";

					$result3 = $mysqli->query($sql);

					$row3 = $result3->fetch_assoc();

					$ap=$row3['apellido_paterno'];
					$am=$row3['apellido_materno'];
					$n=$row3['nombre'];

					echo $n,' ',$ap,' ', $am;
				?>

<<<<<<< HEAD
=======
					
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851




<<<<<<< HEAD

	                </h5>
	            </center>
	            <center>
	                <h5>Firma del Evaluador</h5>
	            </center>

	        </div>


	        <div class="col-xs-4 col-sm-4 col-md-4">
	            <hr class="">
	            <center>
	                <h5><?php
=======
				 </h5></center>
				<center><h5>Firma del Evaluador</h5></center>

				</div>


				<div class="col-xs-4 col-sm-4 col-md-4" >
				<hr class="">
				<center><h5><?php
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851


					require 'conexion.php';
						
					$idusuario = $_SESSION["id_usuario"];
					



					$sql= "SELECT * FROM usuarios WHERE usuario IN (SELECT rfc_tercer FROM metas WHERE id_usuario='$idusuario' AND anio='2022')";

					$result3 = $mysqli->query($sql);

					$row3 = $result3->fetch_assoc();

					$ap=$row3['apellido_paterno'];
					$am=$row3['apellido_materno'];
					$n=$row3['nombre'];

					echo $n,' ',$ap,' ', $am;
				?>

<<<<<<< HEAD
=======
					




				 </h5></center>
				<center><h5>Firma del Tercer Evaluador</h5></center>

				</div>

				
				

				</div>
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851





<<<<<<< HEAD
	                </h5>
	            </center>
	            <center>
	                <h5>Firma del Tercer Evaluador</h5>
	            </center>

	        </div>




	    </div>


	    <center><button class="btn btn-primary " id="btn-imprimir" onclick="window.print(); "> Imprimir </button>&nbsp;

	        <a href="index.php" class="btn btn-default" id="btn-imprimir" role="button">SALIR</a>

	    </center>
	    <br>
	    <br>
	    <script src="https://framework-gb.dn.gob.mx/gobmx.js"></script>
	    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
	</body>

	</html>
=======

         <br>
         <br>

        <center>
        		
			<button class="btn btn-primary" onclick="window.print()" > Imprimir </button>&nbsp;	

        	<a href="index.html"><button class="btn btn-danger" > Salir  <span  class="glyphicon glyphicon-remove"></center>
        	<br>
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
>>>>>>> 5832c5fe5c0636775c13cabf6d8ba134c8457851
