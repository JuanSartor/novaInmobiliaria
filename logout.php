<?php  
 //logout.php  
 // session_start();  
 // session_destroy();  


session_start();


session_unset();
session_destroy();



  
echo'<script type="text/javascript">
    alert("Se ha Cerrado Su Sesión");
    window.location.href="inicio.php";
    </script>';

 ?> 