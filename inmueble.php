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
                                 <a class="nav-link" href="#" style="background-color: lightsteelblue;" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-home"></i>Inmuebles</a>

                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" id="linkClientes" name="linkClientes" href="clientes.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-hands-helping"></i>Clientes</a>

                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="personalizacion.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-edit"></i>Personalizacion</a>

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
                             INMUEBLES

                             <div style="width: 20px">
                                 <button type="button" class="btn btn-primary mb-1" id="btnNuevoProductor" data-toggle="modal" data-target="#agregarnuevosdatosmodal" style="width: 50px"> <span class="fas fa-plus-circle"></span> </button>
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






     <!-- Modal agregar -->
     <div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content" style="width: 650px;">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Nuevo Inmueble</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">

                     <form id="frmnuevo" onsubmit="nuevoInmueble()" action="" method="post">

                         <!-- 0 casa - 1 terreno - 2 galpon - 3 salon -->
                         <div class="row">
                             <div class="col-6">
                                 <label>Tipo Inmueble</label> <br>
                                 <select style="font-size: 12px;" name="tipo_inmueble" id="tipo_inmueble">
                                     <option selected value="0">Casa</option>
                                     <option value="1">Terreno</option>
                                     <option value="2">Galpon</option>
                                     <option value="3">Salon</option>
                                     <option value="4">Campo</option>
                                     <option value="5">Departamento</option>
                                     <option value="6">Casa Quinta</option>
                                     <option value="7">PH</option>
                                 </select>
                             </div>
                         </div>

                         <br>
                         <div class="row">
                             <div class="col-4">
                                 <label>Precio Venta</label>
                                 <input type="text" class="form-control input-sm" id="precio" name="precio">
                             </div>
                             <div class="col-4">
                                 <label>Precio Alquiler</label>
                                 <input type="text" class="form-control input-sm" id="precio_alquiler" name="precio_alquiler">
                             </div>
                             <div class="col-4">
                                 <label>Dormitorios </label>
                                 <input type="number" class="form-control input-sm" id="dormitorios" name="dormitorios">
                             </div>

                         </div>

                         <div class="row">
                             <div class="col-4">
                                 <label>Baños </label>
                                 <input type="number" class="form-control input-sm" id="banios" name="banios">
                             </div>
                             <div class="col-4">
                                 <label>Garage</label>
                                 <input type="number" class="form-control input-sm" id="garage" name="garage">
                             </div>
                             <div class="col-4">
                                 <label>Direccion</label>
                                 <input type="text" class="form-control input-sm" id="direccion" name="direccion">
                             </div>

                         </div>

                         <div class="row">

                             <div class="col-4">
                                 <label>Barrio </label>
                                 <input type="text" class="form-control input-sm" id="barrio" name="barrio">
                             </div>
                             <div class="col-4">
                                 <label>Ciudad</label>
                                 <input type="text" class="form-control input-sm" id="ciudad" name="ciudad">
                             </div>
                             <div class="col-4">
                                 <label>Provincia</label>
                                 <input type="text" class="form-control input-sm" value="Santa Fe" id="provincia" name="provincia">
                             </div>
                         </div>


                         <div class="row">
                             <div class="col-4">
                                 <label>M2</label>
                                 <input type="text" class="form-control input-sm" id="m2" name="m2">
                             </div>



                             <div class="col-4">
                                 <label>M2 Cubiertos</label>
                                 <input " type=" text" class="form-control input-sm" id="m2cubiertos" name="m2cubiertos">
                             </div>

                             <div class="col-4">
                                 <label>Antiguedad</label>
                                 <input type="text" class="form-control input-sm" id="antiguedad" name="antiguedad">
                             </div>
                         </div>



                         <!--     
0 disponible para alquiler y venta  
1 disponible para venta
2 disponible para alquiler
3 reservado
4 alquilado
5 vendido
6 no disponible
7 eliminado
    -->

                         <br>
                         <div class="row">
                             <div class="col-6">
                                 <label>Estado</label> <br>
                                 <select style="font-size: 12px;" name="estado" id="estado">
                                     <option selected value="0">Disponible alquiler/venta</option>
                                     <option value="1">Disponible venta</option>
                                     <option value="2">Disponible alquiler</option>
                                     <option value="3">Reservado</option>
                                     <option value="4">Alquilado</option>
                                     <option value="5">Vendido</option>
                                     <option value="6">No disponible</option>
                                 </select>
                             </div>

                             <div class="col-6">
                                 <label>Cliente</label><br>

                                 <select style="font-size: 12px;" name="cliente" id="cliente">
                                     <option selected value="0">Seleccione cliente</option>
                                     <?php

                                        $conexion = conectar();

                                        $sql = "SELECT * FROM cliente WHERE eliminado=0";

                                        $resultado = mysqli_query($conexion, $sql);
                                        mysqli_close($conexion);


                                        while ($valoresA = mysqli_fetch_array($resultado)) {
                                        ?>
                                         <option value="<?php print($valoresA['id_cliente']); ?>"> <?php print($valoresA['nombre'] . ' ' . $valoresA['apellido']); ?> </option>

                                     <?php
                                        }
                                        ?>
                                 </select>

                             </div>


                         </div>


                         <br>
                         <div class="row">
                             <div class="col-6">
                                 <label>Prioridad </label>
                                 <input type="number" class="form-control input-sm" id="prioridad" name="prioridad">
                             </div>

                             <div class="col-6">
                                 <label>Moneda</label> <br>
                                 <select style="font-size: 12px;" name="moneda" id="moneda">
                                     <option selected value="0">ARS</option>
                                     <option value="1">USD</option>

                                 </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-6">
                                 <label>URL Video </label>
                                 <input class="form-control input-sm" id="url_video" name="url_video">
                             </div>


                         </div>


                         <div class="row">

                         </div>

                         <div class="row">
                             <div class="col-6">
                                 <label>Descripcion</label>
                                 <textarea name="descripcion" id="descripcion" rows="5" style="width: 100%;"></textarea>
                             </div>
                             <div class="col-6">
                                 <label>URL Ubicacion</label>
                                 <textarea name="url_ubicacion" id="url_ubicacion" rows="5" style="width: 100%;"></textarea>
                             </div>
                         </div>



                         <div class="row">
                             <div class="col-6">
                                 <label>Titulo</label>
                                 <textarea name="titulo" id="titulo" rows="5" style="width: 100%;"></textarea>
                             </div>
                             <div class="col-6">
                                 <label>Subtitulo</label>
                                 <textarea name="subtitulo" id="subtitulo" rows="5" style="width: 100%;"></textarea>
                             </div>
                         </div>

                         <br>




                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                             <button type="submit" id="btnAgregarNuevo" class="btn btn-primary">Crear Nuevo</button>
                         </div>

                     </form>


                 </div>

             </div>
         </div>
     </div>




     <!-- Modal editar -->
     <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content" style="width: 650px;">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Actualizar Inmueble</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form id="frmactualizar" onsubmit="actualizarGuardarUsuario()" action="" method="post">

                         <!-- 0 casa - 1 terreno - 2 galpon - 3 salon -->
                         <div class="row">
                             <div class="col-6">
                                 <label>Tipo Inmueble</label> <br>
                                 <select style="font-size: 12px;" name="tipo_inmuebleU" id="tipo_inmuebleU">
                                     <option value="0">Casa</option>
                                     <option value="1">Terreno</option>
                                     <option value="2">Galpon</option>
                                     <option value="3">Salon</option>
                                     <option value="4">Campo</option>
                                     <option value="5">Departamento</option>
                                     <option value="6">Casa Quinta</option>
                                     <option value="7">PH</option>
                                 </select>
                             </div>
                         </div>

                         <br>
                         <div class="row">
                             <div class="col-4">
                                 <label>Precio Venta</label>
                                 <input type="text" class="form-control input-sm" id="precioU" name="precioU">
                             </div>
                             <div class="col-4">
                                 <label>Precio Alquiler</label>
                                 <input type="text" class="form-control input-sm" id="precio_alquilerU" name="precio_alquilerU">
                             </div>
                             <div class="col-4">
                                 <label>Dormitorios </label>
                                 <input type="number" class="form-control input-sm" id="dormitoriosU" name="dormitoriosU">
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-4">
                                 <label>Baños </label>
                                 <input type="number" class="form-control input-sm" id="baniosU" name="baniosU">
                             </div>
                             <div class="col-4">
                                 <label>Garage</label>
                                 <input type="number" class="form-control input-sm" id="garageU" name="garageU">
                             </div>
                             <div class="col-4">
                                 <label>Direccion</label>
                                 <input type="text" class="form-control input-sm" id="direccionU" name="direccionU">
                             </div>
                         </div>

                         <div class="row">


                             <div class="col-4">
                                 <label>Barrio </label>
                                 <input type="text" class="form-control input-sm" id="barrioU" name="barrioU">
                             </div>
                             <div class="col-4">
                                 <label>Ciudad</label>
                                 <input type="text" class="form-control input-sm" id="ciudadU" name="ciudadU">
                             </div>
                             <div class="col-4">
                                 <label>Provincia</label>
                                 <input type="text" class="form-control input-sm" id="provinciaU" name="provinciaU">
                             </div>
                         </div>


                         <div class="row">


                             <div class="col-4">
                                 <label>M2</label>
                                 <input type="text" class="form-control input-sm" id="m2U" name="m2U">
                             </div>
                             <div class="col-4">
                                 <label>M2 Cubiertos</label>
                                 <input " type=" text" class="form-control input-sm" id="m2cubiertosU" name="m2cubiertosU">
                             </div>
                             <div class="col-4">
                                 <label>Antiguedad</label>
                                 <input " type=" text" class="form-control input-sm" id="antiguedadU" name="antiguedadU">
                             </div>
                         </div>



                         <!--     
0 disponible para alquiler y venta  
1 disponible para venta
2 disponible para alquiler
3 reservado
4 alquilado
5 vendido
6 no disponible
7 eliminado
    -->
                         <br>
                         <div class="row">
                             <div class="col-6">
                                 <label>Estado</label> <br>
                                 <select style="font-size: 12px;" name="estadoU" id="estadoU">
                                     <option selected value="0">Disponible alquiler/venta</option>
                                     <option value="1">Disponible venta</option>
                                     <option value="2">Disponible alquiler</option>
                                     <option value="3">Reservado</option>
                                     <option value="4">Alquilado</option>
                                     <option value="5">Vendido</option>
                                     <option value="6">No disponible</option>
                                 </select>
                             </div>

                             <div class="col-6">
                                 <label>Cliente</label> <br>

                                 <select style="font-size: 12px;" name="clienteU" id="clienteU">
                                     <option selected value="0">Seleccione cliente</option>
                                     <?php

                                        $conexion = conectar();

                                        $sql = "SELECT * FROM cliente WHERE eliminado=0";

                                        $resultado = mysqli_query($conexion, $sql);
                                        mysqli_close($conexion);


                                        while ($valoresA = mysqli_fetch_array($resultado)) {
                                        ?>
                                         <option value="<?php print($valoresA['id_cliente']); ?>"> <?php print($valoresA['nombre'] . ' ' . $valoresA['apellido']); ?> </option>

                                     <?php
                                        }
                                        ?>
                                 </select>

                             </div>


                         </div>
                         <br>
                         <div class="row">
                             <div class="col-6">
                                 <label>Prioridad </label>
                                 <input type="number" class="form-control input-sm" id="prioridadU" name="prioridadU">
                             </div>

                             <div class="col-6">
                                 <label>Moneda</label> <br>
                                 <select style="font-size: 12px;" name="monedaU" id="monedaU">
                                     <option value="0">ARS</option>
                                     <option value="1">USD</option>

                                 </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-6">
                                 <label>URL Video </label>
                                 <input class="form-control input-sm" id="url_videoU" name="url_videoU">
                             </div>


                         </div>




                         <div class="row">
                             <div class="col-6">
                                 <label>Descripcion</label>
                                 <textarea name="descripcionU" id="descripcionU" rows="5" style="width: 100%;"></textarea>
                             </div>
                             <div class="col-6">
                                 <label>URL Ubicacion</label>
                                 <textarea name="url_ubicacionU" id="url_ubicacionU" rows="5" style="width: 100%;"></textarea>
                             </div>
                         </div>


                         <div class="row">
                             <div class="col-6">
                                 <label>Titulo</label>
                                 <textarea name="tituloU" id="tituloU" rows="5" style="width: 100%;"></textarea>
                             </div>
                             <div class="col-6">
                                 <label>Subtitulo</label>
                                 <textarea name="subtituloU" id="subtituloU" rows="5" style="width: 100%;"></textarea>
                             </div>
                         </div>



                         <br>

                         <input hidden style="text-transform: capitalize;" class="form-control input-sm" id="idU" name="idU">


                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                             <button type="submit" class="btn btn-warning" id="btnGuardar">Guardar</button>
                         </div>

                     </form>


                 </div>

             </div>
         </div>
     </div>






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

                     <form id="uploadForm" action="procesos/upload.php" method="post" enctype="multipart/form-data">
                         <input type="file" id="fileInput" name="imagenes[]" accept=".jpg, .jpeg, .png, .webp" multiple>
                         <p id="error-message"></p>
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


     function setearIdInmueble(id) {
         $('#idUI').val(id);




         $.ajax({
             url: 'procesos/mostrarImagenes.php',
             type: 'POST',
             data: {
                 miVariable: id
             },
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



     function generarQR(id) {

         // URL que se abrirá en la nueva pestaña

         var url = 'procesos/generarQR.php?qr=' + encodeURIComponent(id);

         // Abre una nueva pestaña con la URL especificada
         window.open(url, '_blank');


     }
 </script>



 <script type="text/javascript">
     function nuevoInmueble() {

         datos = $('#frmnuevo').serialize();
         $.ajax({
             type: "POST",
             data: datos,
             url: "procesos/agregarInmueble.php",
             success: function() {

                 $('#tablaDatatable').load('tablaInmueble.php');
                 alertify.success("Se agrego correctamente");

             },
             error: function() {

                 alertify.success("No se pudo agregar correctamente");

             }

         });


     }




     function eliminarDatos(id) {
         alertify.confirm('Eliminar Inmueble', '¿Esta seguro que desea eliminar el inmueble?',
             function() {
                 $.ajax({
                     type: "POST",
                     data: "id=" + id,
                     url: "procesos/eliminarInmueble.php",
                     success: function(r) {

                         $('#tablaDatatable').load('tablaInmueble.php');
                     },
                     error: function() {



                     }
                 });

             },
             function() {});



     }
 </script>



 <script type="text/javascript">
     function actualizarGuardarUsuario() {
         datos = $('#frmactualizar').serialize();
         $.ajax({
             type: "POST",
             data: datos,
             url: "procesos/actualizarInmueble.php",
             success: function() {





             },
             error: function() {



             }

         });

     }
 </script>


 <script type="text/javascript">
     $('#btnAgregarUsuarioNuevo').click(function() {
         datos = $('#frmnuevo').serialize();

         $('#precio').val('');
         $('#dormitorios').val('');
         $('#banios').val('');
         $('#garage').val('');
         $('#direccion').val('');
         $('#antiguedad').val('');
         $('#m2U').val('');
         $('#m2cubiertosU').val('');
         $('#m2cubiertosU').val('');

     });




     function actualizarUsuario(id) {
         $.ajax({
             type: "POST",
             data: "id=" + id,
             url: "procesos/obtenerDatosInmueble.php",
             success: function(r) {
                 datos = jQuery.parseJSON(r);


                 $('#idU').val(datos['id_inmueble']);
                 $('#precioU').val(datos['precio']);
                 $('#dormitoriosU').val(datos['dormitorios']);
                 $('#baniosU').val(datos['banios']);
                 $('#garageU').val(datos['garage']);
                 $('#direccionU').val(datos['direccion']);
                 $('#antiguedadU').val(datos['antiguedad']);
                 $('#m2U').val(datos['m2']);
                 $('#m2cubiertosU').val(datos['m2cubiertos']);
                 $('#descripcionU').val(datos['observacion']);
                 $('#estadoU').val(datos['estado']);
                 $('#clienteU').val(datos['cliente']);
                 $('#prioridadU').val(datos['prioridad']);
                 $('#tituloU').val(datos['titulo']);
                 $('#subtituloU').val(datos['subtitulo']);
                 $('#ciudadU').val(datos['ciudad']);
                 $('#provinciaU').val(datos['provincia']);
                 $('#monedaU').val(datos['moneda']);
                 $('#barrioU').val(datos['barrio']);
                 $('#precio_alquilerU').val(datos['precio_alquiler']);
                 $('#url_ubicacionU').val(datos['url_ubicacion']);
                 $('#tipo_inmuebleU').val(datos['tipo_inmueble']);
                 $('#url_videoU').val(datos['url_video']);

             }
         });
     }
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


 <script>
     document.getElementById('uploadForm').addEventListener('submit', function(event) {
         const fileInput = document.getElementById('fileInput');
         const files = fileInput.files;
         const errorMessage = document.getElementById('error-message');

         if (files.length > 3) {
             event.preventDefault(); // Evitar que el formulario se envíe
             errorMessage.textContent = "Puedes cargar maximo 3 fotos de una sola vez";
             fileInput.value = ""; // Limpiar la selección de archivos
         } else {
             errorMessage.textContent = ""; // Limpiar el mensaje de error
         }
     });
 </script>