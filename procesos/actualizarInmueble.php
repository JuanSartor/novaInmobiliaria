<?php

include("../clases/conexion.php");
require_once "../clases/crud.php";
$obj = new crud();

$datos = array(
	$_POST['idU'],
	$_POST['precioU'],
	$_POST['dormitoriosU'],
	$_POST['baniosU'],
	$_POST['garageU'],
	$_POST['direccionU'],
	$_POST['antiguedadU'],
	$_POST['m2U'],
	$_POST['m2cubiertosU'],
	$_POST['descripcionU'],
	$_POST['clienteU'],
	$_POST['estadoU'],
	$_POST['prioridadU'],
	$_POST['tituloU'],
	$_POST['subtituloU'],
	$_POST['ciudadU'],
	$_POST['provinciaU'],
	$_POST['monedaU'],
	$_POST['barrioU'],
	$_POST['precio_alquilerU'],
	$_POST['url_ubicacionU'],
	$_POST['tipo_inmuebleU'],
	$_POST['url_videoU']
);




echo $obj->actualizarInmueble($datos);
