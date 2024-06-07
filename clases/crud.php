<?php
session_start();
class crud
{


	// inserto usuario
	public function agregarUsuario($datos)
	{

		$conexion = conectar();
		$pw = password_hash($datos[1], PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuario(usuario,contrasenia,nombre,apellido) VALUES ('$datos[0]','$pw','$datos[2]','$datos[3]')";

		return mysqli_query($conexion, $sql);
	}



	// inserto usuario
	public function agregarInmueble($datos)
	{

		$conexion = conectar();


		$sql = "INSERT INTO inmueble(precio,dormitorios,banios,garage,direccion,antiguedad,m2,m2cubiertos,
		observacion,cliente_id_cliente,estado,prioridad,titulo,subtitulo,ciudad,provincia,moneda,barrio,
		precio_alquiler,url_ubicacion,tipo_inmueble,url_video)
		 VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]'
		 ,'$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]','$datos[12]','$datos[13]'
		 ,'$datos[14]','$datos[15]','$datos[16]','$datos[17]','$datos[18]','$datos[19]','$datos[20]'
		 ,'$datos[21]')";

		return mysqli_query($conexion, $sql);
	}

	//elimino datos de usuario
	public function eliminar($id)
	{


		$conexion = conectar();

		$sql = "UPDATE usuario SET eliminado='1' WHERE id_usuario='$id'";

		return mysqli_query($conexion, $sql);
	}


	//elimino datos de inmueble y sus imagenes
	public function eliminarInmueble($id)
	{

		$conexion = conectar();
		$sql = "UPDATE inmueble SET estado='7' WHERE id_inmueble='$id'";


		// elimino si tenia fotos guardadas
		$directorio = '../imagenes-inmuebles/inmueble-ID-' . $id;
		// Verificar si el directorio existe
		if (is_dir($directorio)) {
			// Eliminar el contenido del directorio
			eliminarContenidoDirectorio($directorio);

			// Intentar eliminar el directorio
			if (rmdir($directorio)) {
				echo "El directorio $directorio ha sido eliminado correctamente.";
			} else {
				echo "No se pudo eliminar el directorio $directorio.";
			}
		} else {
			echo "El directorio $directorio no existe.";
		}



		return mysqli_query($conexion, $sql);
	}


	//elimino cliente
	public function eliminarCliente($id)
	{


		$conexion = conectar();

		$sql = "UPDATE cliente SET eliminado='1' WHERE id_cliente='$id'";

		mysqli_query($conexion, $sql);

		mysqli_close($conexion);

		return true;
	}

	// actualizar datos de usuario
	public function  actualizar($datos)
	{

		$conexion = conectar();

		$sql = "UPDATE usuario SET nombre='$datos[1]',apellido='$datos[2]', usuario='$datos[0]'  WHERE id_usuario='$datos[3]'";

		return mysqli_query($conexion, $sql);
	}

	// actualizar datos del inmueble
	public function  actualizarInmueble($datos)
	{

		$conexion = conectar();


		$sql = "UPDATE inmueble SET precio='$datos[1]',dormitorios='$datos[2]', banios='$datos[3]',
		garage='$datos[4]',direccion='$datos[5]', antiguedad='$datos[6]' , m2='$datos[7]'
		, m2cubiertos='$datos[8]' , observacion='$datos[9]' , cliente_id_cliente='$datos[10]'
		, estado='$datos[11]', prioridad='$datos[12]' , titulo='$datos[13]'
		, subtitulo='$datos[14]' , ciudad='$datos[15]' , provincia='$datos[16]' , moneda='$datos[17]'
		, barrio='$datos[18]' , precio_alquiler='$datos[19]' , url_ubicacion='$datos[20]'
		, tipo_inmueble='$datos[21]' , url_video='$datos[22]' WHERE id_inmueble='$datos[0]'";

		return mysqli_query($conexion, $sql);
	}

	// actualizar datos de usuario
	public function  cambiarContrasenia($datos)
	{

		$conexion = conectar();
		$pw = password_hash($datos[0], PASSWORD_DEFAULT);
		$sql = "UPDATE usuario SET contrasenia='$pw' WHERE id_usuario='$datos[2]'";

		return mysqli_query($conexion, $sql);
	}



	// actualizar datos de usuario
	public function  actualizarClienteBd($datos)
	{

		$conexion = conectar();

		$sql = "UPDATE cliente SET nombre='$datos[3]',apellido='$datos[4]',dni='$datos[5]',telefono='$datos[1]',mail='$datos[0]'   WHERE id_cliente='$datos[2]'";

		mysqli_query($conexion, $sql);
		mysqli_close($conexion);

		return true;
	}

	// obtener datos de usuario
	public function obtenerDatos($id)
	{

		$conexion = conectar();

		$sql = "SELECT usuario,nombre,apellido,id_usuario FROM usuario WHERE id_usuario='$id'";

		$resultado = mysqli_query($conexion, $sql);

		$ver = mysqli_fetch_array($resultado);

		$datos = array('usuario' => $ver[0], 'nombre' => $ver[1], 'apellido' => $ver[2], 'id' => $ver[3]);
		mysqli_close($conexion);

		return $datos;
	}


	// obtener datos de usuario
	public function obtenerDatosInmueble($id)
	{

		$conexion = conectar();

		$sql = "SELECT id_inmueble,observacion,precio,dormitorios,banios,garage,direccion,antiguedad,
		m2,m2cubiertos,cliente_id_cliente,estado,prioridad,titulo,subtitulo,ciudad,provincia,moneda,barrio,
		precio_alquiler,url_ubicacion,tipo_inmueble,url_video
		 FROM inmueble WHERE id_inmueble='$id'";

		$resultado = mysqli_query($conexion, $sql);

		$ver = mysqli_fetch_array($resultado);

		$datos = array(
			'id_inmueble' => $ver[0], 'observacion' => $ver[1], 'precio' => $ver[2],
			'dormitorios' => $ver[3], 'banios' => $ver[4], 'garage' => $ver[5], 'direccion' => $ver[6], 'antiguedad' => $ver[7], 'm2' => $ver[8], 'm2cubiertos' => $ver[9], 'cliente' => $ver[10], 'estado' => $ver[11], 'prioridad' => $ver[12], 'titulo' => $ver[13], 'subtitulo' => $ver[14], 'ciudad' => $ver[15], 'provincia' => $ver[16], 'moneda' => $ver[17], 'barrio' => $ver[18], 'precio_alquiler' => $ver[19], 'url_ubicacion' => $ver[20], 'tipo_inmueble' => $ver[21], 'url_video' => $ver[22]
		);
		mysqli_close($conexion);

		return $datos;
	}


	// inserto cliente
	public function agregarCliente($datos)
	{

		$conexion = conectar();

		$sql = "INSERT INTO cliente(nombre,apellido,dni,mail,telefono) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

		mysqli_query($conexion, $sql);

		mysqli_close($conexion);

		return true;
	}

	// obtener datos del cliente
	public function obtenerDatosCliente($id)
	{

		$conexion = conectar();

		$sql = "SELECT id_cliente,nombre,apellido,dni,telefono,mail FROM cliente WHERE id_cliente='$id'";

		$resultado = mysqli_query($conexion, $sql);

		$ver = mysqli_fetch_array($resultado);

		$datos = array('id_cliente' => $ver[0], 'nombre' => $ver[1], 'apellido' => $ver[2], 'dni' => $ver[3], 'telefono' => $ver[4], 'mail' => $ver[5]);
		mysqli_close($conexion);

		return $datos;
	}
}






// Función para eliminar el contenido de un directorio recursivamente
function eliminarContenidoDirectorio($dir)
{
	$archivos = glob($dir . '/*');
	foreach ($archivos as $archivo) {
		if (is_dir($archivo)) {
			eliminarContenidoDirectorio($archivo);
		} else {
			unlink($archivo);
		}
	}
}
