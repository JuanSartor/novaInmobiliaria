<?php

include ("../clases/conexion.php");
require_once "../clases/crud.php";
$obj= new crud();

$datos = array(
	$_POST['usuario'],
	$_POST['pw'],
	ucwords($_POST['nombre']),
	ucwords($_POST['apellido']));



echo $obj->agregarUsuario($datos);




?>