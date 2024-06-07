<?php
include 'clases/conexion.php';



$conexion= conectar();


session_start();  
$_SESSION["usernameJS"] = $_POST["usuario"];
$_SESSION['last_login_timestamp'] = time(); 

$parametros= array($_POST['usuario'],$_POST['password']);



//$sql= "SELECT id_usuario,usuario,eliminado FROM usuario WHERE usuario='$parametros[0]' and
 //DECODE(password,'Nova')='$parametros[1]' and eliminado='0' ";

 $sql= "SELECT id_usuario,usuario,eliminado,contrasenia,nombre,apellido FROM usuario WHERE usuario='$parametros[0]'
  and eliminado='0' ";



$resultado=mysqli_query($conexion,$sql);


	

	if($reg=mysqli_fetch_array($resultado) and $reg["eliminado"]=='0' and password_verify($parametros[1], $reg["contrasenia"]) ){
		$_SESSION["nombre"]=$reg["nombre"];
		$_SESSION["apellido"]=$reg["apellido"];
		
		header("location: usuario.php");	
	}
	else{
		echo "<div class=\"alert alert-danger\" role=\"alert\" >Sesion Invalida</div> ";
	}


mysqli_close($conexion);



?>