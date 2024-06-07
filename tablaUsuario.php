<?php

include ("clases/conexion.php");

$conexion=conectar();


$sql="SELECT usuario,nombre,apellido,id_usuario FROM usuario where eliminado = 0";

$result = mysqli_query($conexion,$sql);


$fechaActual= getdate();

$fechaDeHoy=$fechaActual['mday'].'-'.$fechaActual['mon'].'-'.$fechaActual['year'];



?>





<div>
	<link href="librerias/bootstrap/tableexport.css" rel="stylesheet" type="text/css">
	
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">

		<thead  style="background-color:#ccc; color: white; font-weight: bold; ">
			<tr>
				<td style="font-size: 12px" >ID</td>
				<td style="font-size: 12px" >Usuario</td>
				
				<td style="font-size: 12px">Nombre y Apellido</td>
				<td style="font-size: 12px">Editar</td>
				<td style="font-size: 12px">Eliminar</td>
				<td style="font-size: 12px">Cambiar</td>
				

			</tr>


		</thead>

		
			<tbody>
				<?php
				while ($mostrar=mysqli_fetch_array($result)) {
					?>

				<tr style="background-color: white;">
					<td style="font-size: 12px"> <?php echo $mostrar[3]?> </td>
					<td style="font-size: 12px"> <?php echo $mostrar[0]?> </td>
				
					<td style="font-size: 12px"> <?php echo $mostrar[1]." ". $mostrar[2] ?> </td>
	
				
						<td> 
						<span class="btn btn-warning btn-sm" data-toggle="modal" title="Editar"  data-target="#modalEditar" onclick="actualizarUsuario('<?php echo $mostrar[3] ?>')">
						<span class="fas fa-edit "></span>
						</span>
						</td>  
							<td>
						<span class="btn btn-danger btn-sm" title="Eliminar" onclick="eliminarDatos('<?php echo $mostrar[3] ?>')">
							<span class="fas fa-trash-alt"></span>
						</span>
					</td> 
					<td>
						<span class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCambiar"  title="Cambiar contraseña" onclick="cambiarContraSetId('<?php echo $mostrar[3] ?>')">
							<span class="fas fa-key"></span>
						</span>
					</td> 

					
				</tr>


<?php
}
?>
			</tbody>


	</table>
</div>


<script type="text/javascript">
	
$(document).ready(function() {
    $('#iddatatable').DataTable();
} );

</script>

<script src="librerias/tableExport/FileSaver.min.js"></script>
<script src="librerias/tableExport/Blob.min.js"></script>
<script src="librerias/tableExport/xls.core.min.js"></script>
<script src="librerias/tableExport/tableexport.js"></script>

<script>
/*
$("table").tableExport({
	formats: ["xlsx"],//Tipo de archivos a exportar ("xlsx","txt", "csv", "xls")
	ignoreCols: [6,7], 
	position: 'button',  // Posicion que se muestran los botones puedes ser: (top, bottom)
	bootstrap: false,//Usar lo estilos de css de bootstrap para los botones (true, false)
	fileName: "Usuarios al <?php echo $fechaDeHoy;?>",    //Nombre del archivo 
}); */
</script>





