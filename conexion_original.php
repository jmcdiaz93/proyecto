<?php

$mysqli= new mysqli("","","","");


if (mysqli_connect_errno()) {
	echo 'Conexion fallida:', mysqli_connect_error();
	exit();
}

?>