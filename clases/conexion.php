<?php

 /**
  * 
  */
 
 function conectar(){


 		$hostname = "localhost";
 		$database = "novainmob_2024_j";
 		$password="";
 		$username = "root";
 		
 		$conexion= new mysqli($hostname,$username,$password,$database);
	
 		return $conexion;
 	}
 

 ?>