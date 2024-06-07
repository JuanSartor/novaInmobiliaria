<?php

include ("../clases/conexion.php");
require_once "../clases/crud.php";
$obj= new crud();

$datos = array(
	$_POST['usuarioU'],
	ucwords($_POST['nombreU']),
	ucwords($_POST['apellidoU']),
	$_POST['idU'],);




echo $obj->actualizar($datos);





?>