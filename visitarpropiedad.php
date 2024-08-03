<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Nova Inmobiliaria un grupo de profesionales a tu disposición, para asesorarte y facilitarte tus operaciones en el mercado inmobiliario: Tasaciones - Administración de Propiedades - Compra Venta de Inmuebles - Proyectos Inmobiliarios.">
    <?php
    if ($_SERVER['HTTP_HOST'] === 'localhost') {
        $UrlIndex = 'https://localhost/novaInm/';
    } else {
        $UrlIndex = 'https://inmobiliarianova.com.ar/';
    }
    ?>
    <title>Nova Inmobiliaria</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo $UrlIndex . 'images/favicon.png'; ?>" type="image/x-icon">
    <!-- esto comente el 02-06-2024
    <link rel="stylesheet" type="<?php echo $UrlIndex . 'text/css'; ?>" href="//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
-->
    <link rel="stylesheet" href="<?php echo $UrlIndex . 'css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo $UrlIndex . 'css/fonts.css'; ?>">
    <link rel="stylesheet" href="<?php echo $UrlIndex . 'css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo $UrlIndex . 'fontawesome/css/fontawesome.min.css'; ?>">

    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $UrlIndex . 'css/bootstrap_3.3.7.min.css'; ?>">
    <!-- Minified JS library -->
    <script src="<?php echo $UrlIndex . 'js/jquery_3.2.1_jquery.min.js'; ?>"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="<?php echo $UrlIndex . 'js/bootstrap_js_3.3.7.min.js'; ?>"></script>
    <link rel="stylesheet" href="<?php echo $UrlIndex . 'css/style-visitarPropiedad.css'; ?>">
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
                                    <a class="brand" href="<?php echo $UrlIndex; ?>"><img class="brand-logo-dark" src="<?php echo $UrlIndex . 'images/logo-nova-grande.png'; ?>" alt="Nova Inmobiliaria" width="214" height="56" />
                                    </a>
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
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="<?php echo $UrlIndex; ?>">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo $UrlIndex . 'ventas'; ?>">Ventas</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo $UrlIndex . 'alquileres'; ?>">Alquileres</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo $UrlIndex . 'tasaciones'; ?>">Tasaciones</a>
                                        </li>


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

        <?php
        include("clases/conexion.php");

        $idInm = $_GET["inmueble"];
        $conexion = conectar();
        $sql = "SELECT *, IF(moneda = 0, 'ARS', 'USD') AS nombremoneda FROM inmueble WHERE id_inmueble= $idInm";
        $resultado = mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        $inm = mysqli_fetch_array($resultado);


        ?>



        <div style="margin-top: 0px;" class="row">
            <div class="col-7">
                <!-- carrousel de fotos de la propiedad a mostrar -->
                <div id="carouselExampleInterval" style="margin-inline: auto;" class="carousel slide  col-10" data-ride="carousel">
                    <div style="cursor: pointer;" class="carousel-inner">

                        <?php
                        // Directorio donde se encuentran las imágenes
                        $directorio = 'imagenes-inmuebles/inmueble-ID-' . $idInm . "/";

                        // con este if verifico que el directorio existe, si existe es porque hay imagenes
                        if (!is_dir($directorio)) {
                            echo "<b>NO SE ENCONTRARON IMAGENES!</b><br><br>";
                        } else {
                            // Obtener la lista de archivos en el directorio
                            $archivos = scandir($directorio);


                            // Función de comparación para ordenar los archivos por numeración
                            usort($archivos, function ($a, $b) {
                                // Extrae la parte numérica del nombre del archivo
                                $numA = (int) filter_var($a, FILTER_SANITIZE_NUMBER_INT);
                                $numB = (int) filter_var($b, FILTER_SANITIZE_NUMBER_INT);

                                // Compara los números
                                return $numA - $numB;
                            });

                            $jsa = 1;
                            // Iterar sobre los archivos
                            foreach ($archivos as $archivo) {
                                // Ignorar directorios y archivos ocultos
                                if ($archivo != '.' && $archivo != '..') {
                                    // Generar la etiqueta <img> para cada imagen

                                    $nuevo_dir = $UrlIndex . str_replace("../", "", $directorio);


                                    if ($jsa == '1') {
                                        echo '<div class="carousel-item active" >
      <img  class="tam-imagen-carro " src="' . $nuevo_dir . $archivo . '" data-toggle="modal" data-target="#imagenModal"  alt="NOVA INMOBILIARIA">
    </div>';
                                        $jsa++;
                                    } else {
                                        echo '<div class="carousel-item" >
    <img loading="lazy" class="tam-imagen-carro "  src="' . $nuevo_dir . $archivo . '" data-toggle="modal" data-target="#imagenModal"  alt="NOVA INMOBILIARIA">
  </div>';
                                    }
                                }
                            }
                        }

                        // esto lo hago para cuando copia la url de un VIDEO en youtube
                        if ((!empty($inm["url_video"])) && (strpos($inm["url_video"], 'watch?') !== false)) {
                            $arrcad = explode("watch?v=", $inm["url_video"]);
                            $cadFinal = $arrcad[0] . 'embed/' . $arrcad[1];

                            echo '<div class="carousel-item" >
                            <iframe class="dim-video"  src="' . $cadFinal . '"  allowfullscreen></iframe>
                            </div>';
                        }

                        // esto lo hago para cuando copia la url de un SHORT en youtube
                        if ((!empty($inm["url_video"])) && (strpos($inm["url_video"], 'shorts') !== false)) {
                            $arrcad = explode("shorts", $inm["url_video"]);
                            $cadFinal = $arrcad[0] . 'embed' . $arrcad[1];

                            echo '<div class="carousel-item" >
                            <iframe class="dim-video"  src="' . $cadFinal . '"  allowfullscreen></iframe>
                            </div>';
                        }


                        ?>


                    </div>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">

                    <i style="font-size: 55px; color: red;" class="fa-solid fa-caret-left"></i>

                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">

                    <i style="font-size: 55px; color: red;" class="fa-solid fa-caret-right"></i>


                    <span class="sr-only">Siguiente</span>
                </a>

            </div>



            <div class="col-4">


                <div style="justify-content: center; margin-top: 0px; align-items: center;" class="row ">

                    <h2 class="tam-texto-desc-prop" style="font-weight: 800; margin-top: 0px; margin-bottom: 0px;">
                        <?php

                        $tipoInmueble;
                        switch ($inm["tipo_inmueble"]) {
                            case "0":
                                $tipoInmueble = 'CASA';
                                break;
                            case "1":
                                $tipoInmueble = 'TERRENO';
                                break;
                            case "2":
                                $tipoInmueble = 'GALPON';
                                break;
                            case "3":
                                $tipoInmueble = 'SALON';
                                break;
                            case "4":
                                $tipoInmueble = 'CAMPO';
                                break;
                            case "5":
                                $tipoInmueble = 'DEPARTAMENTO';
                                break;
                            case "6":
                                $tipoInmueble = 'CASA QUINTA';
                                break;
                            default:
                                $tipoInmueble = 'PH';
                                break;
                        }

                        switch ($inm["estado"]) {
                            case '0':
                                echo $tipoInmueble . " EN VENTA/ALQUILER";
                                break;
                            case '1':
                                echo $tipoInmueble . " EN VENTA";
                                break;
                            case '2':
                                echo $tipoInmueble . " EN ALQUILER";
                                break;
                        }
                        ?>
                    </h2>
                </div>
                <div style="justify-content: center; margin-top: 0px; align-items: center;" class="row ">
                    <h4 class="h4-naranja"><?php echo $inm["nombremoneda"] . ' ' . number_format($inm["precio"], 0, ",", "."); ?> </h4>
                </div>
                <div style="justify-content: center; margin-top: 0px;" class="row">
                    <h4 class="h4-barrio" style="margin-top: 0px; font-weight: 700; text-transform: uppercase;">
                        <img style="position: relative; bottom: 5px;" class="tam-iconos" src="<?php echo $UrlIndex . 'images/iconos/location-dot-solid.svg'; ?>" alt="">
                        <?php echo 'B°' . $inm["barrio"] . ', ' . $inm["ciudad"]; ?>
                    </h4>
                </div>







                <!-- detalle con iconos -->
                <div class="borde-mobile" style=" background: #f3b284; justify-content: center; padding: 12px; border-radius: 8px;">
                    <div style="justify-content: left; font-weight: 600;" class="row div-caract-icono">
                        <?php
                        if (!empty($inm["m2"])) {
                            echo '<div class="col-4 texto-info-inmueble">
                       <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src=" ' . $UrlIndex . 'images/iconos/circle-info-solid.svg" alt="">' . $inm["m2"] . ' Sup. Total
                       </div>';
                        }
                        if (!empty($inm["m2cubiertos"])) {
                            echo '<div class="col-4 texto-info-inmueble">
                        <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="' . $UrlIndex . 'images/iconos/house-solid.svg" alt="">' . $inm["m2cubiertos"] . ' Sup. Cubierta
                        </div>';
                        }
                        if (!empty($inm["dormitorios"])) {
                            echo '<div class="col-4 texto-info-inmueble">
                        <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="' . $UrlIndex . 'images/iconos/bed-solid.svg" alt="">' . $inm["dormitorios"] . ' Dormitorios
                        </div>';
                        }
                        if (!empty($inm["banios"])) {
                            echo '<div class="col-4 texto-info-inmueble">
                        <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="' . $UrlIndex . 'images/iconos/toilet-solid.svg" alt="">' . $inm["banios"] . ' Baños
                        </div>';
                        }
                        if (!empty($inm["garage"])) {
                            echo '<div class="col-4 texto-info-inmueble">
                        <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="' . $UrlIndex . 'images/iconos/car-solid.svg" alt="">' . $inm["garage"] . ' Garage
                        </div>';
                        }
                        if (!empty($inm["antiguedad"])) {
                            echo '<div class="col-4 texto-info-inmueble">
                        <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="' . $UrlIndex . 'images/iconos/calendar-days-solid.svg" alt="">' . $inm["antiguedad"] . ' Antigüedad
                        </div>';
                        }

                        if (!empty($inm["direccion"])) {
                            echo '<div class="col-12 texto-info-inmueble">
                        <img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="' . $UrlIndex . 'images/iconos/location-dot-solid.svg" alt="">' . $inm["direccion"] . '
                        </div>';
                        }

                        ?>

                    </div>
                </div>


                <!-- detalle observacion -->
                <div class="borde-mobile" style=" background: #f3b284; justify-content: center; padding: 12px; border-radius: 8px; margin-top: 20px;">
                    <div style="justify-content: left; font-weight: 600;" class="row">
                        <?php
                        if (!empty($inm["observacion"])) {
                            echo '<div style="word-wrap: break-word; white-space: pre-line;" class="col-12 texto-info-inmueble">
                     ' . $inm["observacion"] . '
                       </div>';
                        }


                        ?>

                    </div>
                </div>






            </div>



        </div>
        <div class="row" style="margin-top: 0px; margin-bottom: 10px;">
            <div class="col-7" style="text-align: center; margin-top: 20px;">
                <?php
                if (!empty($inm["url_ubicacion"])) {
                    echo $inm["url_ubicacion"];
                }
                ?>
            </div>

            <div class="col-4">
                <div class="centrar-input-form-cons">
                    <h2 style="color: #FF6900;">Envianos tu consulta</h2>
                </div>

                <form id="frmContacto">
                    <div class="centrar-input-form-cons">
                        <input class="input-form-inm" placeholder="Nombre y Apellido" type="text" id="nombre_apellido" name="nombre_apellido" required>
                    </div>
                    <div class="centrar-input-form-cons">

                        <input class="input-form-inm" placeholder="Telefono/Celular" type="tel" id="celular" name="celular" required>
                    </div>
                    <div class="centrar-input-form-cons">

                        <input class="input-form-inm" placeholder="Correo Electronico" type="email" id="email" name="email" required>
                    </div>
                    <?php
                    $inmuebleTipo;
                    switch ($inm["tipo_inmueble"]) {
                        case 0:
                            $inmuebleTipo = 'la Casa';
                            break;
                        case 1:
                            $inmuebleTipo = 'el Terreno';
                            break;
                        case 2:
                            $inmuebleTipo = 'el Galpon';
                            break;
                        case 3:
                            $inmuebleTipo = 'el Terreno';
                            break;
                    }
                    ?>
                    <input hidden id="propiedad" name="propiedad" value="<?php echo "ID  " . $idInm ?>">

                    <div class="centrar-input-form-cons">
                        <textarea class="input-form-inm" id="observaciones" name="observaciones" rows="4" required><?php echo 'Hola, tengo interés en ' . $inmuebleTipo . ' con direccion en ' . $inm["direccion"] . ', ' . $inm["ciudad"] . ' ' . $inm["provincia"] . '. Muchas gracias!'; ?></textarea>
                    </div>
                    <div id="div-enviar" class="centrar-input-form-cons">
                        <button class="button-secondary btn-enviar-con-mail button-sm btn-whats-home " type="submit">Enviar consulta</button>
                    </div>
                    <div id="div-enviando" style="display: none;" class="centrar-input-form-cons">
                        <button class="button-secondary btn-enviar-con-mail button-sm btn-whats-home " type="submit">Enviando...</button>
                    </div>
                </form>
            </div>

        </div>

        <!-- texto agradecimiento color naranja, debe aparecer una vez que se envia el formulario-->
        <div id="agradecimiento" style="padding: 0px; display: none;" class="section section section-lg">
            <div class="container wide ">
                <p class="alinear-parrafo">
                    <span style="font-weight: 700;">¡MUCHAS GRACIAS</span>
                    por contactarte con <span style="font-weight: 700;">NOVA INMOBILIARIA,</span>
                    muy pronto podremos comenzar a <span style="font-weight: 700;">TRABAJAR JUNTOS!</span>
                </p>
            </div>
        </div>
        <!------------------------------------------>

        <!-- footerrr-->
        <!------------------------------->
        <footer class="section footer-classic context-dark dis-footer">
            <div class="container wide ">
                <div class="row row-sm-30 ">
                    <div class="col-lg-6 ">
                        <div class="group-md group-middle ">
                            <p class="rights "><span>&copy;&nbsp; </span><span class="copyright-year "></span><span>&nbsp;</span><span>Nova Inmobiliaria</span><span>.&nbsp;</span></p>
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



    <script src="<?php echo $UrlIndex . 'js/core.min.js'; ?> " async></script>
    <script src="<?php echo $UrlIndex . 'js/script.js'; ?> " async></script>

    <!--coded by dyoma-->
</body>


<!-- Modal para mostrar imagen expandida -->
<div style="z-index: 9999;" class="modal fade" id="imagenModal" tabindex="-1" role="dialog" aria-labelledby="imagenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img id="imagenExpandida" src="" class="img-fluid" alt="Imagen expandida">
            </div>
        </div>
    </div>
</div>


</html>

<script>
    $(document).ready(function() {
        // Detener el cambio automático del carrusel
        $('#carouselExampleInterval').carousel({
            interval: false
        });



        $(".carousel-item img").click(function() {

            var imagenSrc = $(this).attr("src");
            $("#imagenExpandida").attr("src", imagenSrc);
        });




        // formulario para enviar consulta sobre propiedad
        $('#frmContacto').on('submit', function(event) {
            $('#div-enviar').css('display', 'none');
            $('#div-enviando').css('display', 'block');


            // Detén el envío del formulario
            event.preventDefault();
            datos = $('#frmContacto').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/enviarFormulario.php",
                success: function(r) {

                    $('#nombre_apellido').val('');
                    $('#celular').val('');
                    $('#observaciones').val('');
                    $('#email').val('');

                    $("#agradecimiento").show(2000);
                    setTimeout(function() {
                        $("#agradecimiento").hide(2000);
                    }, 6000);

                    $('#div-enviando').css('display', 'none');
                    $('#div-enviar').css('display', 'block');



                },
                error: function() {

                    alertify.error("No se pudo eliminar");


                }
            });


        });

    });
</script>