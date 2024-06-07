<?php

include("../clases/conexion.php");

$conexion = conectar();


if (isset($_GET['operacion'])) {
	$operacion = $_GET['operacion'];


	if ($operacion == '1') {
		$query = "SELECT id_inmueble,
    CASE tipo_inmueble
        WHEN '0' THEN 'Casa'
        WHEN '1' THEN 'Terreno'
        WHEN '2' THEN 'Galpon'
		WHEN '3' THEN 'Salon'
		WHEN '4' THEN 'Campo'
		WHEN '5' THEN 'Departamento'
		WHEN '6' THEN 'Casa Quinta'
        ELSE 'PH'
    END AS tipo_inmueble
		 FROM inmueble WHERE (estado=0 or estado=2) GROUP BY tipo_inmueble";
	} else {
		$query = "SELECT id_inmueble,
		CASE tipo_inmueble
		WHEN '0' THEN 'Casa'
        WHEN '1' THEN 'Terreno'
        WHEN '2' THEN 'Galpon'
		WHEN '3' THEN 'Salon'
		WHEN '4' THEN 'Campo'
		WHEN '5' THEN 'Departamento'
		WHEN '6' THEN 'Casa Quinta'
        ELSE 'PH'
		END AS tipo_inmueble
			 FROM inmueble WHERE (estado=0 or estado=1) GROUP BY tipo_inmueble";
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
