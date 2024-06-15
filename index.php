<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Nova Inmobiliaria un grupo de profesionales a tu disposición, para asesorarte y facilitarte tus operaciones en el mercado inmobiliario: Tasaciones - Administración de Propiedades - Compra Venta de Inmuebles - Proyectos Inmobiliarios.">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nova Inmobiliaria</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!--    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
-->
    <link rel="stylesheet" href="css/bootstrap.css">


    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap_3.3.7.min.css">
    <!-- Minified JS library -->
    <script src="js/jquery_3.2.1_jquery.min.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="js/bootstrap_js_3.3.7.min.js"></script>
    <link rel="stylesheet" href="css/style-index.css">

    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Cargando...</p>
        </div>
    </div>
    <div class="page">
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand-->
                                    <a class="brand"><img class="brand-logo-dark" src="images/logo-nova-grande.png" alt="" width="214" height="56" /></a>
                                </div>

                                <!-- icono whatsapp mobiel-->
                                <div style="display: none;" class="btn-wrap ubi-btn-whatsap mobile-whatsap btn-wrap-whatsap">
                                    <a style="text-decoration: none;" class="button-secondary button-sm btn-whats-home" target="_blank" href="https://wa.me/543482683214">
                                        <i class="fa-brands fa-whatsapp ico-what-mobile" style="font-size: 35px; position: relative; top: 5px;"></i>

                                    </a>
                                </div>
                            </div>

                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item active "><a class="rd-nav-link color-nova">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ventas">Ventas</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="alquileres">Alquileres</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="tasaciones">Tasaciones</a>
                                        </li>
                                        <!--  <li class="rd-nav-item"><a class="rd-nav-link" href="about">Nosotros</a>
                                        </li>
    -->

                                    </ul>
                                </div>
                            </div>
                            <div class="rd-nav-item">
                                <div class="btn-wrap ubi-btn-whatsap">
                                    <a style="text-decoration: none;" class="button-secondary button-sm btn-whats-home" target="_blank" href="https://wa.me/543482683214">
                                        <i class="fa-brands fa-whatsapp" style="font-size: 35px; position: relative; top: 5px;"></i>
                                        <span style="margin-left: 5px;">Chatea con nosotros!</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--Main bunner-->
        <div class="section section-main-bunner context-dark" id="home">




            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->


                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <?php
                    // Directorio donde se encuentran las imágenes
                    $directorio = 'images/carrousel/';
                    $archivos = scandir($directorio);
                    $i = 1;
                    // Iterar sobre los archivos
                    foreach ($archivos as $archivo) {
                        if ($archivo != '.' && $archivo != '..') {
                            $nuevo_dir = str_replace("../", "", $directorio);
                            if ($i == 1) {
                    ?>
                                <div class="item active" data-bs-interval="30">
                                    <img src='<?php echo  $nuevo_dir . $archivo ?>' alt="Nova Inmobiliaria">
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="item " data-bs-interval="30">
                                    <img src='<?php echo  $nuevo_dir . $archivo ?>' alt="Nova Inmobiliaria">
                                </div>
                    <?php
                            }
                            $i++;
                        }
                    }
                    ?>


                </div>


            </div>




        </div>

        <!-- buscador-->
        <div class="buscador">
            <div class="txt-buscador">
                BUSCADOR DE PROPIEDADES
            </div>
            <div class="selectores">
                <div class="selectind select-1">
                    <div class="deco-select">
                        <select name="operacion" id="operacion">
                            <option value="0" selected>Operacion</option>
                            <option value="1">Alquiler</option>
                            <option value="2">Venta</option>


                        </select>
                    </div>
                </div>
                <div class="selectind select-2">
                    <div class="deco-select">
                        <select name="tipo_propiedad" id="tipo_propiedad">
                            <option value="0" selected>Tipo de Propiedad</option>
                        </select>
                    </div>
                </div>
                <div class="selectind select-3">
                    <div class="deco-select">
                        <select name="ciudades" id="ciudades">
                            <option value="0" selected>Localidad</option>

                        </select>
                    </div>
                </div>

            </div>

        </div>

        <!-- titulo propiedades destacadas-->
        <!-- <div class="title-propiedades-destacadas">


            <div style="display: flex; justify-content: center;">
                <div class="txt-nuestras ubi-mobb-nues">Nuestras
                </div>
                <hr class="long-line1">
            </div>

            <div class="txt-prop-destacadas">
                <i class="fa-sharp fa-solid fa-star estrella-izq"></i> PROPIEDADES DESTACADAS
                <i class="fa-sharp fa-solid fa-star estrella-der"></i>
            </div>

            <div style="display: flex; justify-content: center;">
                <hr class="long-line2">
                <div class="txt-nuestras ubi-mobb-delMes">del mes!
                </div>
            </div>


        </div>
                -->







        <!-- propiedades-->
        <div style="padding: 0px 0;" class="section section section-lg">
            <div class="container wide">


                <?php
                include("clases/conexion.php");
                $conexion = conectar();

                $sql = "SELECT * FROM inmueble WHERE estado!=7 order by prioridad desc limit 4";

                $resultado = mysqli_query($conexion, $sql);
                mysqli_close($conexion);
                $i = 1;
                while ($valoresA = mysqli_fetch_array($resultado)) {


                    if ($i % 2 != 0) {
                ?>

                        <div style=" background: #f3b284; " class="row row-md-30 ">
                            <div class="col-md-6 col-lg-6 ">

                                <h2 style="color: black; font-weight: 600; text-transform: uppercase; text-align: right;" class="title margen-h2 texto-desktop"><?php print($valoresA['titulo']); ?></h2>
                                <div style="color: black; text-align: right;" class="subtitle-2  ajust-mob texto-desktop"><?php print($valoresA['subtitulo']); ?></div>
                                <div class="btn-wrap "><a class="button button-primary button-md btn-mas-info-blanco  info-propiedad" data-id="<?php print($valoresA['id_inmueble']); ?>" data-caption-animate="fadeInUp " data-caption-delay="450 ">Mas info!</a></div>
                            </div>
                            <div class="col-md-6 col-lg-6 "><img class="primer-img" src="<?php echo 'imagenes-inmuebles/inmueble-ID-' . $valoresA['id_inmueble'] . "/" . $valoresA['imagen_principal'] ?>" alt="novaInmobiliaria" width="580 " alt=" " width="580 " height="550 " />
                            </div>
                        </div>


                    <?php
                    } else { ?>

                        <div class="row row-md-30 ">
                            <div class="col-md-6 col-lg-6 "><img class="segunda-img" src="<?php echo 'imagenes-inmuebles/inmueble-ID-' . $valoresA['id_inmueble'] . "/" . $valoresA['imagen_principal'] ?>" alt="novaInmobiliaria" width="580 " />
                            </div>
                            <div class="col-md-6 col-lg-6 ">
                                <div class="mt-4 ">

                                    <h2 style="color: black; font-weight: 600; text-transform: uppercase;" class="title margen-h2 texto-desktop"><?php print($valoresA['titulo']); ?></h2>
                                    <div style="color: #FF6900;" class="subtitle-2 texto-desktop"><?php print($valoresA['subtitulo']); ?></div>
                                    <div class="btn-wrap sacar-margen-fondo-blanco-mobile"><a class="button button-secondary button-md btn-mas-info-naranja info-propiedad" data-id="<?php print($valoresA['id_inmueble']); ?>" data-caption-animate="fadeInUp " data-caption-delay="450 ">Mas info!</a></div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                    $i++;
                }
                ?>


            </div>

        </div>


        <!-- footerrr-->
        <!------------------------------->



        <footer class="section footer-classic context-dark dis-footer">
            <div class="container wide ">
                <div class="row row-sm-30 ">
                    <div class="col-lg-6 ">
                        <div class="group-md group-middle ">
                            <p style="font-weight: 600;" class="rights "><span>&copy;&nbsp; </span><span class="copyright-year "></span><span>&nbsp;</span><span>Nova Inmobiliaria</span><span>.&nbsp;</span></p>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="text-lg-right ">
                            <ul class="group-xl group-middle ">
                                <li>
                                    <div class="circulo">
                                        <a class="icon icon-default icon-sm mdi mdi-facebook redis-face" target="_blank" href="https://www.facebook.com/inmobiliariaavdanova"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="circulo">
                                        <a class="icon icon-default icon-sm mdi mdi-instagram redis-inst" target="_blank" href="https://www.instagram.com/novainmobiliariaavda/"></a>
                                    </div>

                                </li>
                                <li>
                                    <div class="circulo">
                                        <a class="icon icon-default icon-sm mdi mdi-whatsapp redis-inst" target="_blank" href="https://wa.me/543482683214"></a>
                                    </div>

                                </li>
                                <li>
                                    <div class="circulo">
                                        <a class="icon icon-default icon-sm mdi mdi-email redis-inst" target="_blank" title="administracion@inmobiliarianova.com.ar" href="mailto:administracion@inmobiliarianova.com.ar"></a>
                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- footerrr-->
        <!------------------------------->


    </div>



    <script src="js/core.min.js "></script>
    <script src="js/script.js "></script>

    <!--coded by dyoma-->
</body>

</html>


<script>
    $(document).ready(function() {
        $(".info-propiedad").click(function() {
            var dataId = $(this).data("id");


            var nuevaURL = "visitarpropiedad/" + dataId;
            window.location.href = nuevaURL;

        });



        // metodo para escuchar los select y mostrar dependiendo de lo que selecciona

        $("#operacion").change(function() {
            // Read the selected value
            var selectedValue = $(this).val();

            $('#ciudades').empty();
            $('#ciudades').append($('<option selected></option>').attr('value', 'Localidad').text('Localidad'));
            $('#tipo_propiedad').empty(); // Limpiar el select de ciudades

            if (selectedValue !== '') {
                $.getJSON('procesos/obtener_tipo_propiedad.php', {
                    operacion: selectedValue
                }, function(data) {
                    $('#tipo_propiedad').append($('<option selected></option>').attr('value', 'Tipo de Propiedad').text('Tipo de Propiedad'));

                    $.each(data, function(key, entry) {
                        $('#tipo_propiedad').append($('<option></option>').attr('value', entry.tipo_inmueble).text(entry.tipo_inmueble));
                    });
                });
            }

        });




        $("#tipo_propiedad").change(function() {
            // Read the selected value
            var selectedValueTipoPropiedad = $(this).val();
            valOp = $("#operacion").val();

            $('#ciudades').empty();
            if (selectedValueTipoPropiedad !== '') {
                $.getJSON('procesos/obtener_ciudades.php', {
                    tipo_inmueble: selectedValueTipoPropiedad,
                    operacion: valOp
                }, function(data) {
                    $('#ciudades').append($('<option selected></option>').attr('value', 'Localidad').text('Localidad'));

                    $.each(data, function(key, entry) {
                        $('#ciudades').append($('<option></option>').attr('value', entry.ciudad).text(entry.ciudad));
                    });
                });
            }

        });


        $("#ciudades").change(function() {
            // Read the selected value
            var selectedCiudad = $(this).val();
            valOp = $("#operacion").val();
            valorTipoP = $("#tipo_propiedad").val();



            if (valOp == 1) {
                var nuevaURL = "alquileres.php?varB=" + selectedCiudad + "-" + valorTipoP;
                window.location.href = nuevaURL;
            }
            if (valOp == 2) {
                var nuevaURL = "ventas.php?varB=" + selectedCiudad + "-" + valorTipoP;
                window.location.href = nuevaURL;
            }





        });


    });
</script>