<?php

include("../clases/conexion.php");
require_once "../clases/crud.php";
$obj = new crud();

$datos = array(
	$_POST['precio'],
	$_POST['dormitorios'],
	$_POST['banios'],
	$_POST['garage'],
	$_POST['direccion'],
	$_POST['antiguedad'],
	$_POST['m2'],
	$_POST['m2cubiertos'],
	$_POST['descripcion'],
	$_POST['cliente'],
	$_POST['estado'],
	$_POST['prioridad'],
	$_POST['titulo'],
	$_POST['subtitulo'],
	$_POST['ciudad'],
	$_POST['provincia'],
	$_POST['moneda'],
	$_POST['barrio'],
	$_POST['precio_alquiler'],
	$_POST['url_ubicacion'],
	$_POST['tipo_inmueble'],
	$_POST['url_video']
);



echo $obj->agregarInmueble($datos);
