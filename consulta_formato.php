<?php
 	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}




	$idusuario = $_POST['id_evaluado'];
		

	$query = "SELECT * FROM usuarios WHERE id_usuario='$idusuario' ";

	$result = $mysqli->query($query);

	$row = $result->fetch_assoc();
				
	
		

	
	?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Evaluaci&oacute;n de Desempe&ntilde;o</title>



    <!-- Bootstrap core CSS -->
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" media="print">



    <!-- Custom styles for this template -->


    <div class="col-xs-1"></div>

    <img src="imagenes/sfp.jpg">

</head>

<body>
    <div class="container">

        <header>

            <center>
                <h5>C&eacute;dula de Evaluaci&oacute;n de Desempe&ntilde;o</h5>
            </center>
            <hr class="re">
        </header>




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

        <center>
            <h5>Resultados de Evaluaci&oacute;n 2020-2021</h5>
        </center>
        <hr class="re">
        <p>
            <center>
                <h4>
                    <?php

		   		 $idusuario = $_POST['id_evaluado'];


				$sql1 = "SELECT * FROM resultados WHERE id_usuario='$idusuario' and anio= '2022'";

				$result = $mysqli->query($sql1);

				$row = $result->fetch_assoc();
				if (empty($row)) {

						echo "Aun no se ha evaluado el servidor p&uacute;blico, seleccione otro";

					}else{

				?>

                </h4>
            </center>
        </p>

        <div class="col-sm-4"></div>
        <div class="container">




            <div class=" col-sm-4 col-md-4">



                <table align="center" class="table table-bordered table-dark">

                    <?php	

				 	require 'conexion.php';
					
					$idusuario = $_POST['id_evaluado'];

					$sql1= "SELECT res_metas,res_factores, res_final,fecha_evaluacion,nivel_desempenio FROM resultados WHERE id_usuario='$idusuario' AND anio='2022'"; 

					$result = $mysqli->query($sql1);
					
					$row = $result->fetch_assoc();

					 	?>

                    <tbody>
                        <tr>

                            <td> <h5>PUNTAJE TOTAL DE METAS:</h5> </td>
                            <td>
                            <h5><center> <?php echo ($row['res_metas']); ?></center></h5> 
                            </td>

                        </tr>
                        <tr>

                            <td><h5>PUNTAJE TOTAL DE FACTORES:</h5> </td>
                            <td>
                            <h5><center><?php echo ($row['res_factores']); ?></center></h5> 
                            </td>

                        </tr>
                        <tr>
                            <td><h5>CALIFICACION GLOBAL:</h5></td>
                            <td>
                            <h5><center><?php echo ($row['res_final']); ?></center></h5> 
                            </td>

                        </tr>

                        <tr>
                            <td><h5>NIVEL DE DESEMPE&Ntilde;O:</h5></td>
                            <td>
                            <h5><center><?php echo ($row['nivel_desempenio']); ?></center></h5>
                            </td>

                        </tr>

                        <tr>
                            <td><h5>FECHA DE EVALUACI&Ntilde;N:</h5></td>
                            <td>
                            <h5><center><?php echo ($row['fecha_evaluacion']); ?></center></h5>
                            </td>

                        </tr>
                    </tbody>
                </table>


            </div>

            </center>

        </div>
        
        <center>
            <h5>Firmas de Conformidad</h5>
        </center>
        <hr class="red">
        <fieldset disabled>
            <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-sm-4">
                        <?php



			  		 $result = $mysqli->query($query);

					$row = $result->fetch_assoc();
					?>

                        <input type="text" id="disabledTextInput" class="form-control"
                            placeholder="<?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?> <?php  echo ($row['nombre']); ?>">

                    </div>


                    <?php

	          	  
	          	require ('conexion.php');

	            

				$sql = "SELECT rfc_superior,rfc_tercer FROM metas WHERE id_usuario='$idusuario' and anio='2021'";

				$result = $mysqli->query($sql);

				
				$row = $result->fetch_assoc();

				$rfc1=$row['rfc_superior'];
				$rfc2=$row['rfc_tercer'];

	           

				$query = "SELECT apellido_paterno,apellido_materno,nombre FROM usuarios WHERE usuario='$rfc1' ";

				$resultado = $mysqli->query($query);

				$row = $resultado->fetch_assoc();

				$apellido_paterno1=$row['apellido_paterno'];
				$apellido_materno1=$row['apellido_materno'];
				$nombre1=$row['nombre'];

	            ?>



                    <div class="col-sm-4">
                        <input type="text" id="disabledTextInput" class="form-control"
                            placeholder="<?php  echo $apellido_paterno1 ?> <?php  echo $apellido_materno1; ?> <?php  echo $nombre1; ?>">
                    </div>

                    <?php

	          	require ('conexion.php');	  
	        

	           

				$query1 = "SELECT apellido_paterno,apellido_materno,nombre FROM usuarios WHERE usuario='$rfc2' ";

				$resultado = $mysqli->query($query1);

				$row = $resultado->fetch_assoc();

				$apellido_paterno2=$row['apellido_paterno'];
				$apellido_materno2=$row['apellido_materno'];
				$nombre2=$row['nombre'];


				

		 

	            ?>



                    <div class="col-sm-4">
                        <input type="text" id="disabledTextInput" class="form-control"
                            placeholder="<?php  echo $apellido_paterno2 ?> <?php  echo $apellido_materno2; ?> <?php  echo $nombre2; ?>">
                    </div>



                </div>

            </div>
        </fieldset>



    </div>

    <?php }?>
    <br>
    <center><button class="btn btn-primary " id="btn-imprimir" onclick="window.print(); "> Imprimir </button>&nbsp;
        <a href="metas.php" class="btn btn-default" id="btn-imprimir" role="button">REGRESAR</a>&nbsp;
        <a href="index.php" class="btn btn-default" id="btn-imprimir" role="button">SALIR</a>

    </center>
    <br>
    <br>


    <script src="https://framework-gb.cn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
</body>

</html>