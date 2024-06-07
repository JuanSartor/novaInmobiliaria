 <?php  
      session_start();  
      if(isset($_SESSION["usernameJS"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 36000 )
            // 900 = 15 * 60   el 60 son segundos
           {  
                header("location:logout.php");  
           }  
           else  
           {  
                $_SESSION['last_login_timestamp'] = time();  
                
           }  
      }  
      else  
      {  
           header('location:inicio.php');  
      }  
      ?>


<!DOCTYPE html>
<html>
<head>

    <?php require_once "scripts.php";
      include ("clases/conexion.php");


        ?>
    <!-- Required meta tags -->

    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <!-- Bootstrap CSS -->
<!--     <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"> -->
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css"> 
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <!-- <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css"> -->
    <!--     <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css"> -->
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <!--  <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css"> -->
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css"> 
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>Nova Inmobiliaria</title>

  

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <!-- <a class="navbar-brand" href="index.php">  <img src="static/img/gaba.jpeg" height="48" width="48"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                       
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/logout.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name" id="NombreLoguin"></h5>
                                    <span class="status"></span><span class="ml-2">Conectado</span>
                                </div>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Cerrar Sesion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link"   href="#"  style="background-color: lightsteelblue;" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-user"></i>Usuarios</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inmueble.php"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-home"></i>Inmuebles</a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   id="linkClientes" name="linkClientes" href="clientes.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-hands-helping"></i>Clientes</a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"    href="personalizacion.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-edit"></i>Personalizacion</a>
                               
                            </li>
                          
                                </ul>
                                </div>
                        
                         
                       
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            
                    
                  


                    

                    <!-- parte principal de la pagina -->


<div class="container">

        <div class="row">
            <div class="col-sm-12">
     
                <div class="card text-center">
                    <div class="card-header">
                         USUARIOS


                         <div style="width: 20px" >
                <button type="button"  class="btn btn-primary mb-1" id="btnNuevoProductor" data-toggle="modal" data-target ="#agregarnuevosdatosmodal"  style="width: 50px"> <span class="fas fa-plus-circle"></span> </button>
            </div>
                            
                    </div>

                    <div class="card-body">
                        
                        
                        
                        
                        <div id="tablaDatatable"></div>

                    </div>
                    
                </div>


            </div>

        </div>


    </div>


        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
 
     <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
     <script src="assets/libs/js/main-js.js"></script> 
    <!-- chart chartist js -->
 <!--    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script> -->
    <!-- sparkline js -->
    <!-- <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script> -->
    <!-- morris js -->
    <!-- <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script> -->
    <!-- chart c3 js -->
<!--     <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script> -->
    <!-- <script src="assets/libs/js/dashboard-ecommerce.js"></script> -->






<!-- Modal agregar -->
<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form id="frmnuevo" onsubmit="nuevoUsuario()"  action="" method="post">
    <label>Usuario <label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="usuario" name="usuario" required minlength="4" maxlength="19">
    <label>Contraseña <label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="pw" name="pw" required minlength="4" maxlength="15">
    <label>Nombre <label style="color: red;">*</label></label>
    <input style="text-transform: capitalize;" type="text"  class="form-control input-sm" id="nombre" name="nombre" required minlength="4" maxlength="59" pattern="^[a-zA-Z\s]+">
    <label>Apellido <label style="color: red;">*</label></label>
    <input style="text-transform: capitalize;" type="text" class="form-control input-sm" id="apellido" name="apellido" required minlength="4" maxlength="39" pattern="^[a-zA-Z\s]+">
   <br>
    


 
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" id="btnAgregarNuevo" class="btn btn-primary" >Crear Nuevo</button>
      </div>

</form>
 

      </div>
      
    </div>
  </div>
</div>




<!-- Modal editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmactualizar"  onsubmit="actualizarGuardarUsuario()"  action="" method="post">
    
<label>Usuario</label>
    <input type="text" class="form-control input-sm" id="usuarioU" name="usuarioU" readonly="true" minlength="4" > 
  <!--  <label>Contraseña<label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="pwU" name="pwU" required minlength="4" maxlength="15">
    -->
    <label>Nombre<label style="color: red;">*</label></label>
     <input style="text-transform: capitalize;" type="text"  class="form-control input-sm" id="nombreU" name="nombreU" required minlength="4"  pattern="^[a-zA-Z\s]+">
    <label>Apellido<label style="color: red;">*</label></label>
     <input style="text-transform: capitalize;" type="text" class="form-control input-sm" id="apellidoU" name="apellidoU" required minlength="4"  pattern="^[a-zA-Z\s]+">
 
     <input hidden style="text-transform: capitalize;"  class="form-control input-sm" id="idU" name="idU" >

   



    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-warning" id="btnGuardar">Guardar</button>
      </div>

</form>


      </div>
      
    </div>
  </div>
</div>




<!-- Modal cambiar contraseña -->
<div class="modal fade" id="modalCambiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmcambiarPW"  onsubmit="return false "  action="" method="post" >
    
    <label>Contraseña<label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="pwU" name="pwU" required minlength="4" maxlength="15">
    <label>Repetir Contraseña<label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="pwUR" name="pwUR" required minlength="4" maxlength="15">
    
     
    
    <input hidden style="text-transform: capitalize;"  class="form-control input-sm" id="idUC" name="idUC" >

   



    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cambiarContra()" class="btn btn-warning" data-dismiss="modal" id="btnGuardar">Guardar</button>
      </div>

</form>


      </div>
      
    </div>
  </div>
</div>





</body>
 
</html>




<script type="text/javascript">
    $(document).ready(function(){

        $('#tablaDatatable').load('tablaUsuario.php');
       
    });


</script>



<script type="text/javascript">
    function nuevoUsuario(){
    
       datos=$('#frmnuevo').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/agregarUsuario.php",
            success:function(){

                     //   $('#tablaDatatable').load('tablaUsuario.php');
                    alertify.success("Se agrego correctamente");
                    
            },
            error:function(){

                alertify.success("No se pudo agregar correctamente");
                
            }

        });
        

    }




    function eliminarDatos(id){
    alertify.confirm('Eliminar Usuario', '¿Esta seguro que desea eliminar el usuario?',
        function(){ 
                $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"procesos/eliminarUsuario.php",
        success:function(r){
            
               
                alertify.success("Eliminado con exito");
            
                
        },
        error: function(){

            alertify.error("No se pudo eliminar");
            

        }
    });

        }
        , function(){ });



}


function cambiarContraSetId(id){
    $('#idUC').val(id);
}



</script>



<script type="text/javascript">
    

function actualizarGuardarUsuario(){
        datos=$('#frmactualizar').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/actualizarUsuario.php",
            success:function(){
                
                   
                    alertify.success("Se actualizo correctamente");
                    

            },
            error:function(){

                alertify.success("No se pudo actualizar correctamente");
                
            }

        });

    }
 


</script>


<script type="text/javascript">

$('#btnAgregarUsuarioNuevo').click(function(){
datos=$('#frmnuevo').serialize();

            $('#usuario').val('');
            $('#pw').val('');
            $('#nombre').val('');
            $('#apellido').val('');
            $('#correo').val('');

});




function actualizarUsuario(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"procesos/obtenerDatosUsuario.php",
        success:function(r){
            datos=jQuery.parseJSON(r);

            $('#usuarioU').val(datos['usuario']);
            //$('#pwU').val(datos['pw']);
            $('#nombreU').val(datos['nombre']);
            $('#apellidoU').val(datos['apellido']);
            $('#idU').val(datos['id']);
        

        }
    });
}


</script>



<script type="text/javascript">

//bloqueo para volver hacia atras post logout

    if(history.forward(1)){
        history.replace(history.forward(1));
    }
    $.ajaxSetup({
    cache: false // Desactiva la caché globalmente para todas las solicitudes AJAX
});
    
</script>



<script type="text/javascript">
                $(document).ready(function() {
                   
                   $('#NombreLoguin').text('<?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'];?>');
 
                });
</script>

<script type="text/javascript">

function cambiarContra(){
    
    datos=$('#frmcambiarPW').serialize();

     $.ajax({
         type:"POST",
         url:"procesos/cambiarContra.php",
         data:datos,
         success:function(r){
                   // $('#tablaDatatable').load('tablaUsuario.php');
                   datos=jQuery.parseJSON(r);
                   if(datos['resultado']){
                    alertify.alert("Cambio realizado correctamente").set({ title: "Contraseña" });   
                   }
                   else{
                    alertify.alert("No se pudo realizar, debe ingresar 2 veces la misma contraseña").set({ title: "Contraseña" });  
                   }

                   
             
         },
         error:function(r){

   
             
         }
   
     });
  
     $('#pwU').val('');
     $('#pwUR').val('');
    

 }

</script>