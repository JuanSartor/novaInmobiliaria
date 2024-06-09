<style>
    .color-nova {
        color: #FF6900 !important;
    }

    .btn-whats-home {
        background: #FF6900 !important;
        font-weight: 600;
        letter-spacing: 0.03em;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-align: center;
        cursor: pointer;
        vertical-align: middle;
        user-select: none;
        transition: 250ms all ease-in-out;
        box-shadow: 6px 10px 16px rgba(11, 20, 85, 0.12);
        border-radius: 8px;
    }

    .buscador {
        width: 750px;
        height: 150px;
        background: #ff690087;
        margin-inline: auto;
        position: relative;
        bottom: 680px;
        border-radius: 25px;
    }

    .txt-buscador {
        margin-inline: auto;
        width: 380px;
        color: white;
        font-size: 25px;
        font-weight: 600;
        position: relative;
        top: 20px;
    }

    .selectores {
        display: flex;
        width: 100%;
        position: relative;
        top: 45px;
    }

    .selectind {
        width: 33.33%;
        text-align: center;
    }

    .deco-select {
        background: black;
        width: 190px;
        margin-inline: auto;
        border-radius: 25px;
        height: 40px;
    }

    .select2-container--default .select2-selection--single {
        border-bottom: none !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: white !important;
        font-size: 18px !important;
        line-height: 1.7 !important;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #FF6900 !important
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #f3b284 !important
    }

    .deco-select2 {
        width: 200px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 42% !important;
    }

    .select2-container--open .select2-dropdown--below {
        border-radius: 10px !important;
    }

    .page-header {
        border-bottom: none !important;
    }

    .title-propiedades-destacadas {
        width: 100%;
        text-align: center;
    }

    .txt-prop-destacadas {
        color: #FF6900;
        font-size: 90px;
        font-weight: 600;
        position: relative;
        bottom: 30px;
        right: 4px;
    }

    .txt-nuestras {
        font-size: 30px;
        font-weight: 600;
    }

    .long-line1 {
        width: 585px;
        font-size: 20px;
        background: #FF6900;
        height: 2px;
        margin-left: 2px;
        margin-right: 0px;
    }

    .long-line2 {
        width: 600px;
        font-size: 20px;
        background: #FF6900;
        height: 2px;
        margin-left: 0px;
        margin-right: 2px;
    }

    .estrella-izq {
        position: relative;
        right: 40px;
        font-size: 60px;
    }

    .estrella-der {
        position: relative;
        left: 40px;
        font-size: 60px;
    }

    .margen-h2 {
        margin-top: 130px;
    }

    .btn-mas-info-blanco {
        color: #FF6900 !important;
        background: white !important;
        box-shadow: none !important;
        border: none !important;
        border-radius: 30px !important;
        height: 25px !important;
        line-height: 0 !important;
        margin-left: 100px !important;
    }

    .btn-mas-info-naranja {
        color: white !important;
        background: #FF6900 !important;
        box-shadow: none !important;
        border: none !important;
        border-radius: 30px !important;
        height: 25px !important;
        line-height: 0 !important;
        margin-left: 200px !important;
    }

    .primer-img {
        border-radius: 25px;
        height: 400px;
        margin-top: 40px;
        margin-bottom: 10px;
        position: relative;
        right: 20px;
        border: 2px solid;
        border-color: white;
    }

    .segunda-img {
        border-radius: 25px;
        height: 400px;
        margin-top: 40px;
        margin-bottom: 10px;
        position: relative;
        right: 20px;
        border: 2px solid;
        border-color: #FF6900;
        margin-left: 20px;
    }

    .ubi-btn-whatsap {
        position: relative;
        bottom: 15px;
    }

    .dis-footer {
        background: #FF6900 !important;
        padding: 30px 0 !important;
    }

    .circulo {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        text-align: center;
    }

    .redis-face {
        color: #FF6900 !important;
        position: relative !important;
        top: 8px !important;
        font-size: 37px !important;
    }

    .redis-inst {
        color: #FF6900 !important;
        position: relative !important;
        top: 6px !important;
        font-size: 28px !important;
    }

    .img-tasaciones {
        width: 335px;
        height: auto;
        margin-top: 0px;
        margin-inline: 20px;
        border-radius: 14px;
    }

    .text-img-tasaciones {
        background-color: #483f3f;
        color: white;
        width: 230px;
        text-align: center;
        font-size: 16px;
        height: 55px;
    }

    .pos-primer-texto {
        position: relative;
        bottom: 69px;
        left: 78px;
        padding-top: 4px;
    }

    .pos-segundo-texto {
        position: relative;
        bottom: 124px;
        left: 452px;
        padding-top: 4px;
    }

    .pos-tercer-texto {
        font-size: 16px;
        position: relative;
        bottom: 179px;
        left: 830px;
        padding-top: 4px;
    }

    .parrafo {
        font-size: 19px;
        text-align: center;
        position: relative;
        bottom: 100px;
    }

    .ubicacion-text {
        text-align: left;
        margin-top: 70px;
    }

    .ubicacion-img-tasacion {
        text-align: right;
    }

    .subtitulo-tas {
        font-size: 24px;
    }

    .busqueda-propiedad-ayuda {
        text-align: center;
        background: #f3e9e1;
        width: 900px;
        height: 180px;
        border-radius: 20px;
        margin-top: 50px;
        margin-bottom: 50px !important;
    }

    .btn-click-aqui {
        border-radius: 22px;
        position: relative;
        top: 50px;
    }

    .txt-ayuda {
        font-size: 26px;
        font-weight: 600;
        position: relative;
        top: 20px;
    }

    .seccion-ayuda {
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .texto-min-desc {
        text-align: center;
        position: relative;
        bottom: 70px;
        font-size: 12px;
    }

    .texto-min-precio {
        text-align: center;
        position: relative;
        top: 45px;
    }

    .span-txt-min {
        background: #FF6900 !important;
        padding: 5px;
        border-radius: 5px;
        font-weight: 600;
        opacity: 0.9;
        width: 240px;
        margin-inline: auto;
    }

    .span-txt-precio {
        background: #FF6900 !important;
        padding: 2px;
        border-radius: 8px;
        font-weight: 600;
        opacity: 0.9;
        width: 140px;
        position: relative;
        left: 215px;
        font-size: 16px;

    }

    @media (max-width:600px) {
        .img-tasaciones-alquiler {
            width: 200px;
            height: auto !important;

        }

        .ubicacion-img-tasacion {
            text-align: center;
        }

        .ubicacion-text {
            text-align: center;
            margin-top: 0px;
        }

        .txt-prop-destacadas {
            font-size: 50px;
        }

        .txt-ayuda {
            font-size: 20px;
        }

        .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link,
        .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link,
        .rd-navbar-fixed .rd-nav-item.active .rd-nav-link,
        .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
            border-radius: 15px;
            background: #f3f3f3 !important;
            font-weight: 550;
            font-size: 15px;
        }

        .busqueda-propiedad-ayuda {
            width: 365px;
        }

        .page-header {
            padding-bottom: 0.1px !important;
        }

        html.rd-navbar-fixed-linked .page {
            padding-top: 0px !important;
        }

        .img-tasaciones {
            height: 270px;
        }

        .mobile-whatsap {
            display: block !important;
        }

        .ico-what-mobile {
            font-size: 25px !important;
        }

        .button-sm {
            padding: 10px 15px !important;
        }

        .btn-wrap {
            margin-top: 27px !important;
            margin-left: 100px;
        }

        .pos-primer-texto {
            bottom: 677px;
            margin-inline: auto;
            left: 0px;
        }

        .pos-segundo-texto {
            left: 0px;
            margin-inline: auto;
            bottom: 428px;
        }

        .pos-tercer-texto {
            margin-inline: auto;
            left: 0px;
            bottom: 185px;
        }


    }
</style>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap_3.3.7.min.css">
    <!-- Minified JS library -->
    <script src="js/jquery_3.2.1_jquery.min.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="js/bootstrap_js_3.3.7.min.js"></script>

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
                    <img class='img-tasaciones' style='margin-top:0px;' src= 'imagenes-inmuebles/inmueble-ID-$id/$imagSelec'/>
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