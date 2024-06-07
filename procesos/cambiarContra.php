<?php

include ("../clases/conexion.php");
require_once "../clases/crud.php";
$obj= new crud();

$datos = array(
	$_POST['pwU'],
	$_POST['pwUR'],
	$_POST['idUC']);


if(	$_POST['pwU']==$_POST['pwUR'] ){

	$obj->cambiarContrasenia($datos);

	$datosr= array('resultado'=> true);
	echo json_encode( $datosr);
}
else{
	$datosr= array('resultado'=> false);
	echo json_encode( $datosr);
}








?>