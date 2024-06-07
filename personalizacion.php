 <?php
    session_start();
    if (isset($_SESSION["usernameJS"])) {
        if ((time() - $_SESSION['last_login_timestamp']) > 36000)
        // 900 = 15 * 60   el 60 son segundos
        {
            header("location:logout.php");
        } else {
            $_SESSION['last_login_timestamp'] = time();
        }
    } else {
        header('location:inicio.php');
    }

    ?>


 <!DOCTYPE html>
 <html>

 <head>

     <?php require_once "scripts.php";
        include("clases/conexion.php");



        ?>
     <!-- Required meta tags -->

     <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                                 <a class="nav-link" href="usuario.php" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-user"></i>Usuarios</a>

                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="inmueble.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-home"></i>Inmuebles</a>

                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" id="linkClientes" name="linkClientes" href="clientes.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-hands-helping"></i>Clientes</a>

                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#" style="background-color: lightsteelblue;" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-edit"></i>Personalizacion</a>

                             </li>

                         </ul>
                     </div>
                     </li>

                     </ul>
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
                             PERSONALIZAR IMAGENES INICIALES



                         </div>

                         <div class="card-body">




                             <span onclick="cargarImgs()" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCargarImagenes" title="Cargar imagenes">
                                 <span class="fas fa-image"></span>
                             </span>

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






     <!-- Modal cargar imagenes -->
     <div class="modal fade" id="modalCargarImagenes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content" style="background: #efefef;">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Imagenes</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">

                     <div id="div-imagenes">

                     </div>

                     <form action="procesos/uploadImgCarrousel.php" method="post" enctype="multipart/form-data">
                         <input type="file" name="imagenes[]" accept=".jpg, .jpeg, .png, .webp" multiple>
                         <input type="submit" value="Subir Imágenes">
                         <input hidden style="text-transform: capitalize;" class="form-control input-sm" id="idUI" name="idUI">
                         <br>
                         <hr><br>




                     </form>


                 </div>

             </div>
         </div>
     </div>



 </body>

 </html>




 <script type="text/javascript">
     $(document).ready(function() {

         $('#tablaDatatable').load('tablaInmueble.php');
     });
 </script>



 <script type="text/javascript">
     //bloqueo para volver hacia atras post logout

     if (history.forward(1)) {
         history.replace(history.forward(1));
     }
     $.ajaxSetup({
         cache: false // Desactiva la caché globalmente para todas las solicitudes AJAX
     });
 </script>



 <script type="text/javascript">
     $(document).ready(function() {

         $('#NombreLoguin').text('<?php echo $_SESSION["nombre"] . ' ' . $_SESSION["apellido"]; ?>');

     });
 </script>


 <script type="text/javascript">
     function cargarImgs() {

         $.ajax({
             url: 'procesos/mostrarImagenesCarrousel.php',
             type: 'POST',
             success: function(response) {
                 // Manejar la respuesta del servidor si es necesario
                 // console.log(response);
                 $('#div-imagenes').empty();
                 $('#div-imagenes').append(response);
             },
             error: function(xhr, status, error) {
                 // Manejar errores si es necesario
                 console.error(xhr.responseText);
                 $('#div-imagenes').empty();
             }
         });


     }
 </script>