<?php

include("../clases/conexion.php");

$conexion = conectar();


if (isset($_GET['tipo_inmueble'])) {
	$parametro = $_GET['tipo_inmueble'];

	switch ($parametro) {
		case "Casa":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=0 and ciudad is not null and ciudad!=''";
			break;
		case "Terreno":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=1 and ciudad is not null and ciudad!=''";
			break;
		case "Galpon":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=2 and ciudad is not null and ciudad!=''";
			break;
		case "Salon":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=3 and ciudad is not null and ciudad!=''";
			break;
		case "Campo":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=4 and ciudad is not null and ciudad!=''";
			break;
		case "Departamento":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=5 and ciudad is not null and ciudad!=''";
			break;
		case "Casa Quinta":
			$query = "select distinct ciudad from inmueble where tipo_inmueble=6 and ciudad is not null and ciudad!=''";
			break;
		default:
			$query = "select distinct ciudad from inmueble where tipo_inmueble=7 and ciudad is not null and ciudad!=''";
	}
	if ($_GET['operacion'] == '1') {
		$query = $query . "and (estado=0 or estado=2)";
	} else {
		$query = $query . "and (estado=0 or estado=1)";
	}

	// Consulta para obtener ciudades basadas en el país seleccionado

	$result = $conexion->query($query);

	$ciudades = array();
	while ($row = $result->fetch_assoc()) {


		$ciudades[] = $row;
	}


	// Devolver datos en formato JSON
	echo json_encode($ciudades);
}

$conexion->close();
