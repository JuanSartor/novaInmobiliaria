<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Nova Inmobiliaria un grupo de profesionales a tu disposición, para asesorarte y facilitarte tus operaciones en el mercado inmobiliario: Tasaciones - Administración de Propiedades - Compra Venta de Inmuebles - Proyectos Inmobiliarios.">

    <title>Nova Inmobiliaria</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
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
    <link rel="stylesheet" href="css/style-ventas.css">

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
    <?php
    if ($_SERVER['HTTP_HOST'] === 'localhost') {
        $UrlIndex = 'https://localhost/novaInm/';
    } else {
        $UrlIndex = 'https://inmobiliarianova.com.ar';
    }
    ?>
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
                                    <a class="brand" href="<?php echo $UrlIndex; ?>"><img class="brand-logo-dark" src="images/logo-nova-grande.png" alt="" width="214" height="56" /></a>

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
                                        <li class="rd-nav-item active"><a class="rd-nav-link color-nova">Ventas</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="alquileres">Alquileres</a>
                                        </li>
                                        <li class="rd-nav-item "><a class="rd-nav-link " href="tasaciones">Tasaciones</a>
                                        </li>
                                        <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="about">Nosotros</a>
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

        <!-- titulo propiedades en venta-->
        <div class="title-propiedades-destacadas">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="ubicacion-img-tasacion"><img class="img-tasaciones img-tasaciones-alquiler" src="images/compra-venta.png " />
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="ubicacion-text">
                        <h1 style="font-weight: 600;">PROPIEDADES</h1>
                        <div class="txt-prop-destacadas">
                            EN VENTA
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div style="padding: 0px;" class="section section section-lg seccion-ayuda">
            <div class="container wide">
                <div style=" background: #f3b284; justify-content: center; " class="row row-md-30 ">
                    <div class="busqueda-propiedad-ayuda">
                        <span class="txt-ayuda"> ¿Queres vender tu propiedad con nosotros? <br> ¿Necesitas ayuda con tu busqueda? <br>
                        </span>

                        <a style="text-decoration: none;" class="button-secondary button-sm btn-whats-home btn-click-aqui" target="_blank" href="https://wa.me/543482683214">
                            <span style="margin-left: 5px;">Click aqui!</span>
                        </a>

                    </div>
                </div>
            </div>

        </div>



        <div style="padding: 0px;" class="section section section-lg ">
            <div class="container wide">
                <div style=" justify-content: center; margin-top:0px; margin-bottom:0px;" class="row row-md-30 ">

                    <?php
                    include("clases/conexion.php");


                    $conexion = conectar();
                    if (!empty($_GET["varB"])) {
                        $valores = explode("-", $_GET["varB"]);
                        $tipo;
                        $ciudad = $valores[0];
                        switch ($valores[1]) {
                            case 'Casa':
                                $tipo = 0;
                                break;
                            case 'Terreno':
                                $tipo = 1;
                                break;
                            case 'Galpon':
                                $tipo = 2;
                                break;
                            default:
                                $tipo = 3;
                        }

                        $sql = "SELECT * FROM inmueble WHERE   (estado=0 or estado=1 )
                        and ciudad='$ciudad' and tipo_inmueble='$tipo'";
                    } else {
                        $sql = "SELECT * FROM inmueble WHERE  (estado=0 or estado=1 )";
                    }

                    $resultado = mysqli_query($conexion, $sql);
                    mysqli_close($conexion);
                    $contador = 1;
                    while ($mostrar = mysqli_fetch_array($resultado)) {


                        $tipoInmueble;
                        switch ($mostrar["tipo_inmueble"]) {
                            case "0":
                                $tipoInmueble = 'Casa';
                                break;
                            case "1":
                                $tipoInmueble = 'Terreno';
                                break;
                            case "2":
                                $tipoInmueble = 'Galpon';
                                break;
                            case "3":
                                $tipoInmueble = 'Salon';
                                break;
                            case "4":
                                $tipoInmueble = 'Campo';
                                break;
                            case "5":
                                $tipoInmueble = 'Departamento';
                                break;
                            case "6":
                                $tipoInmueble = 'Casa Quinta';
                                break;
                            default:
                                $tipoInmueble = 'PH';
                                break;
                        }

                        // para que funcion el target _blank tenes q poner la url completa
                        // hacelo cuando vas a subir el archivo final

                        if ($mostrar["moneda"] == '0') {
                            $moneda = 'ARS';
                        } else {
                            $moneda = 'USD';
                        }
                        $textoPrecio = '';
                        if (!empty($mostrar["precio"])) {
                            $textoPrecio = $moneda . ' ' . number_format($mostrar["precio"], 0, ",", ".");
                        }

                        $textoDesDomicilio = '';
                        if (!empty($mostrar["barrio"])) {
                            $textoDesDomicilio =  '<img style="width: 15px; margin-right: 5px; position: relative; bottom: 1px;" class="tam-iconos" src="images/iconos/location-dot-solid-blanca.svg" alt="">' . ' B* ' . $mostrar["barrio"] . '-' . $mostrar["ciudad"];
                        }


                        $textoDesDesMin = '';
                        if (!empty($mostrar["dormitorios"])) {
                            $textoDesDesMin = $textoDesDesMin .   '<img style="width: 15px; margin-right: 3px; margin-left: 7px; position: relative; bottom: 1px;" class="tam-iconos" src="images/iconos/bed-blanca.svg" alt="">' . $mostrar["dormitorios"];
                        }
                        if (!empty($mostrar["banios"])) {
                            $textoDesDesMin = $textoDesDesMin .   '<img style="width: 15px; margin-right: 3px; margin-left: 7px; position: relative; bottom: 1px;" class="tam-iconos" src="images/iconos/toilet-solid-blanca.svg" alt="">' . $mostrar["banios"];
                        }
                        if (!empty($mostrar["garage"])) {
                            $textoDesDesMin = $textoDesDesMin .  '<img style="width: 15px; margin-right: 3px; margin-left: 7px; position: relative; bottom: 1px;" class="tam-iconos" src="images/iconos/car-solid-blanca.svg" alt="">' . $mostrar["garage"];
                        }


                        $id = $mostrar["id_inmueble"];
                        $imagSelec = $mostrar["imagen_principal"];
                        $cad = "<div style='margin-bottom:0px;'>  
                        <div style='color: white;' class='texto-min-precio'>
                        <p class='span-txt-precio'>
                        $textoPrecio
                        </p>
                        </div>
                    <a href='$UrlIndex/visitarpropiedad.php?inmueble=$id' target='_blank'>
                    <img class='img-tasaciones' style='margin-top:0px;' src= 'imagenes-inmuebles/img-secciones/$id.jpg'/>
                    </a>
                    <div style='color: white;' class='texto-min-desc'>
                    <p class='span-txt-min'>
                    $tipoInmueble <br>$textoDesDesMin <br> $textoDesDomicilio
                    </p>
                    </div>
                    </div>";

                        echo $cad;
                        $contador++;
                        if ($contador == 4) {
                            echo '</div> <div style=" justify-content: center;margin-top:0px; margin-bottom:0px; " class="row row-md-30 ">';
                            $contador = 1;
                        }
                    }

                    ?>

                </div>




            </div>


        </div>





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



    <script src="js/core.min.js "></script>
    <script src="js/script.js "></script>

    <!--coded by dyoma-->
</body>

</html>