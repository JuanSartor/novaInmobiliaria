 <?php  
      session_start();  
      if(isset($_SESSION["usernameJS"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 36000 ) // 900 = 15 * 60   el 60 son segundos
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
            <!-- <a class="navbar-brand" id="linkIndex" name="linkIndex" href="index.php">  <img src="static/img/gaba.jpeg" height="48" width="48"></a> -->
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
                                <a class="nav-link"   href="usuario.php"   aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-user"></i>Usuarios</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inmueble.php"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-home"></i>Inmuebles</a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="background-color: lightsteelblue;"  id="linkClientes" name="linkClientes" href="#" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-hands-helping"></i>Clientes</a>
                               
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
                         CLIENTES

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









                    
                    
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
         <!--     <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);"> <i class="fab fa-facebook-square"></i></a>
                                <a href="javascript: void(0);"><i class="fab fa-instagram"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
   <!--  <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script> -->
    <!-- bootstap bundle js -->
     <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>  -->
    <!-- slimscroll js -->
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form id="frmnuevo" onsubmit="nuevoCliente()"  action="" method="post">

    <label id="nombreLabel" >Nombre <label style="color: red;">*</label></label>
    <input style="text-transform: capitalize;" type="text"  class="form-control input-sm" id="nombre" name="nombre" required minlength="4" maxlength="59"   pattern="^[a-zA-Z\s]+">
    <label id="apellidoLabel" >Apellido <label style="color: red;">*</label></label>
    <input style="text-transform: capitalize;" type="text" class="form-control input-sm" id="apellido" name="apellido" required minlength="4" maxlength="39"   pattern="^[a-zA-Z\s]+">
    <label id="dniLabel">DNI <label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="dni" name="dni" required maxlength="24" minlength="4"    pattern="[0-9]+">
   
    <label>Email</label>
    <input type="email" class="form-control input-sm" id="correo" name="correo"  maxlength="59" minlength="4">
    
     <label>Telefono</label>
    <input type="text" class="form-control input-sm" id="telefono" name="telefono"  maxlength="24" minlength="4">
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
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmactualizar"  onsubmit="actualizarGuardarCliente()"  action="" method="post">


 <label id="nombreLabelU" >Nombre <label style="color: red;">*</label></label>
    <input style="text-transform: capitalize;" type="text"  class="form-control input-sm" id="nombreU" name="nombreU" required minlength="4" maxlength="59"   pattern="^[a-zA-Z\s]+">
    <label id="apellidoLabelU" >Apellido <label style="color: red;">*</label></label>
    <input style="text-transform: capitalize;" type="text" class="form-control input-sm" id="apellidoU" name="apellidoU" required minlength="4" maxlength="39"   pattern="^[a-zA-Z\s]+">
    <label id="dniLabelU">DNI <label style="color: red;">*</label></label>
    <input type="text" class="form-control input-sm" id="dniU" name="dniU" required maxlength="24" minlength="4"    pattern="[0-9]+">

    <label>Email</label>
    <input type="email" class="form-control input-sm" id="correoU" name="correoU"  minlength="4" maxlength="24">
     <label>Telefono</label>
    <input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU"  minlength="4" maxlength="24">

    <input type="text" class="form-control input-sm" id="idU" name="idU" required minlength="4" maxlength="24" hidden="true">





    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-warning" id="btnGuardar">Guardar</button>
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

        $('#tablaDatatable').load('tablaClientes.php');
    });


</script>



<script type="text/javascript">
    function nuevoCliente(){


        datos=$('#frmnuevo').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/agregarCliente.php",
            success:function(){
                
                //    $('#tablaDatatable').load('tablaClientes.php');
                    alertify.success("Se agrego correctamente");	


            },
            error:function(){

                alertify.success("No se pudo agregar correctamente");
                
            }
           


        });


    }
    


</script>



<script type="text/javascript">
    

function actualizarGuardarCliente(){
        datos=$('#frmactualizar').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/actualizarCliente.php",
            success:function(){
                
                    $('#tablaDatatable').load('tablaClientes.php');
                    alertify.success("Se actualizo correctamente");
                    

            },
            error:function(){

                alertify.success("No se pudo actualizar correctamente");
                
            }

        });

    }
 


</script>


<script type="text/javascript">

$('#btnAgregarClienteNuevo').click(function(){
datos=$('#frmnuevo').serialize();

           
            $('#nombre').val('');
            $('#apellido').val('');
            $('#correo').val('');

});





function actualizarCliente(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"procesos/obtenerDatosCliente.php",
        success:function(r){
            datos=jQuery.parseJSON(r);

       
            $('#dniU').val(datos['dni']);
            $('#nombreU').val(datos['nombre']);
            $('#apellidoU').val(datos['apellido']);
            $('#correoU').val(datos['mail']);
            $('#idU').val(datos['id_cliente']);
            $('#telefonoU').val(datos['telefono']);     

        }
    });
}



function eliminarDatosCliente(id){
    alertify.confirm('Eliminar Cliente', '¿Esta seguro que desea eliminar el cliente?',
        function(){ 
                $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"procesos/eliminarCliente.php",
        success:function(r){
            
                $('#tablaDatatable').load('tablaClientes.php');
                alertify.success("Eliminado con exito");
            
                
        },
        error: function(){

            alertify.error("No se pudo eliminar");
            

        }
    });

        }
        , function(){ });



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