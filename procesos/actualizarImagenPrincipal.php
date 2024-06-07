<?php

include ("../clases/conexion.php");
$conexion= conectar();

$idInmuebleSeleccionado = $_POST['idInmuebleSeleccionado'];
$imagenSeleccionada = $_POST['imagenSeleccionada'];

$sql="UPDATE inmueble SET imagen_principal='$imagenSeleccionada' WHERE id_inmueble='$idInmuebleSeleccionado'";
		
 mysqli_query($conexion,$sql);

?>