<?php
require ('conexion.php');
session_start();
$idusuario = $_SESSION['id_usuario'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registro de Usuarios</title>


    <!-- Bootstrap core CSS -->
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <br>

    <div class="col-xs-1"></div>

    <img src="imagenes/logoeconomia.jpg">
</head>

<body>
<div class="container mt-5">
        <h1>Registro de Usuarios</h1>
        <div class=row>
            <div class="col-md-12" align="center">
                <form action="form-group">
                    <div class="col-md-12" align="left">
                        <span class="glyphicon glyphicon-home font-black-color"></span>
                        <hr class="red" />
                    </div>
                </form>
            </div>

        </div>
     

        </div>
    <div class="modal" tabindex="-1" id="ventana-mdal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">AVISO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <p align="center">¿Se ha registrado anteriormente?</p>
                </div>
                <div class="modal-footer">
                    <a href="metas.php" class="btn btn-primary">SI</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>


                </div>
            </div>
        </div>
    </div>

    <?php 

include_once ('conexion.php');

if (isset($_POST['siguiente'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidoP']) >= 1 && strlen($_POST['apellidoM']) >= 1 
    && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['passwordc']) >= 1 && strlen($_POST['credencial']) >= 1) {
	    $nombre = trim($_POST['nombre']);
        $apellidoP=trim($_POST['apellidoP']);
        $apellidoM=trim($_POST['apellidoM']);
        $correo = trim($_POST['correo']);
        $contrasenia=  trim($_POST['password']);    
        $credencial=trim($_POST['credencial']);
	    $fechareg = date("d/m/y");
        $_POST['fecha_registro'] = $fechareg;
    $contrasenia2=($_POST['passwordc']);
  


$sql = "SELECT * FROM logeo  WHERE credencial =' $credencial ' ";
$result = $mysqli->query($sql);
$rows = $result->num_rows;


if ($rows > 0) {

$error1="repetido";
  }else{

    $error = "ingreso";
  }

    }
}



   

?>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" align="center">
            <form class="form-horizontal" method="POST">


                <div class="alert alert-inf">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" maxlength="13" class="form-control" placeholder="Nombre  " id="nombre"
                                name="nombre" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Apellido Paterno</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" placeholder="Apellido Paterno"
                                id="apellidoP" name="apellidoP" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Apellido Materno</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" placeholder="Apellido Materno"
                                id="apellidoM" name="apellidoM" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email-03">Correo</label>
                        <div class="col-sm-9">


                            <input type="text" class="form-control" placeholder="Correo  " id="usuario"
                                name="correo" required>

                        </div>
                    </div>
                    <center>
                        <font color="#cc0000"><?php echo isset($error1) ? ($error1): '';?></font>
                    </center>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="password-03"> Nueva
                            Contraseña:</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="password" placeholder="Nueva Contraseña" type="password"
                                name="password" required>

                        </div>


                    </div>
                    <center>
                        <font color="#cc0000"><?php echo isset($error) ? ($error): '';?></font>
                    </center>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="passwordc-03"> Confirma
                            Contraseña:</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="passwordc" placeholder="Confirma Contraseña" type="password"
                                name="passwordc" required minlength="5">

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="password-03"  >Numero
                            credencial:</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="credencial" placeholder="Credencial" type="text"
                                name="credencial" required maxlength="8">
                        </div>
                        <center>
                            <font color="#cc0000"><?php echo isset($error3) ? ($error3): '';?></font>
                        </center>



                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-3">
                           
                            <a href="index.php" class="btn btn-danger pull-right">Cancelar</a>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-primary pull-right" type="submit" id="btnventana" data-toggle="modal"
                                data-target="#ventana-modal" name="siguiente">Siguiente</button>

                        </div>



            </form>

        </div>
    </div>
    </div>

    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="app.js"></script>

</body>

</html>