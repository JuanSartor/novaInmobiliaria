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
        font-size: 50px;
        font-weight: 600;
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
        height: 300px;
        margin-top: 30px;
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

    .margen-fila-imgtasaciones {
        margin-bottom: 20px;
    }

    @media (max-width:600px) {
        .ubicacion-text {
            margin-top: 25px;
        }

        .img-tasaciones-img-tas {
            width: 200px;
            height: auto;

        }

        .ubicacion-img-tasacion {
            text-align: center;
        }

        /* saco espacio de la primer imagen y el header */
        .page-header {
            padding-bottom: 0.1px !important;
        }

        html.rd-navbar-fixed-linked .page {
            padding-top: 0px !important;
        }

        /* icono whatsapp mobile */
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

        /* estilo menu lateral */

        .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link,
        .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link,
        .rd-navbar-fixed .rd-nav-item.active .rd-nav-link,
        .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
            border-radius: 15px;
            background: #f3f3f3 !important;
            font-weight: 550;
            font-size: 15px;
        }

        /* alineto titulo TASACIONES */
        .txt-prop-destacadas {
            text-align: center;
        }

        /* alineo subtitulo siguiente a tasaciones */
        .subtitulo-tas {
            font-size: 20px;
            text-align: center;
        }

        /* ubicacion de textos en las imagenes */
        .pos-primer-texto {
            bottom: 755px;
            margin-inline: auto;
            left: 0px;
        }

        .pos-segundo-texto {
            left: 0px;
            margin-inline: auto;
            bottom: 480px;
        }

        .pos-tercer-texto {
            margin-inline: auto;
            left: 0px;
            bottom: 210px;
        }

        /* margen de borde naranja para parte inferior */
        .margen-bt {
            margin-bottom: 25px;
        }

        .parrafo {
            font-size: 16px;
        }

        .container-mob {
            height: 1700px;
        }

    }
</style>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Nova Inmobiliaria</title>
    <meta charset="utf-8">
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
        $UrlIndex = 'https://inmobiliarianova.com.ar/';
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
                                    <a class="brand" href="<?php echo $UrlIndex; ?>"><img class="brand-logo-dark" src="images/logo-nova-grande.png" alt="" width="214" height="56" /><img class="brand-logo-light" src="images/logo-inverse-430x112.png" alt="" width="215" height="56" /></a>
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
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ventas">Ventas</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="alquileres">Alquileres</a>
                                        </li>
                                        <li class="rd-nav-item active"><a class="rd-nav-link color-nova">Tasaciones</a>
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

        <!-- titulo propiedades destacadas-->
        <div class="title-propiedades-destacadas">
            <div class="row margen-fila-imgtasaciones">
                <div class="col-md-6 ">
                    <div class="ubicacion-img-tasacion"><img class="img-tasaciones img-tasaciones-img-tas" src="images/formulario-de-contacto.png " />
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="ubicacion-text">
                        <div class="txt-prop-destacadas">
                            TASACIONES
                        </div>
                        <p class="subtitulo-tas">Obtén una tasación inmobiliaria <br> precisa y confiable con NOVA INMOBILIARIA</p>
                    </div>
                </div>
            </div>
        </div>



        <div style="padding: 0px;" class="section section section-lg">
            <div class="container wide container-mob">

                <!-- IMG tasacioness-->
                <div style=" background: #f3b284; justify-content: center; " class="row row-md-30 ">
                    <div class="  ">
                        <a href="documentacion">
                            <img class="img-tasaciones" src="images/tasa-3.jpeg " />
                        </a>
                    </div>
                    <div class=" ">
                        <a href="honorarios">
                            <img class="img-tasaciones" src="images/tasa-2.jpeg " />
                        </a>
                    </div>
                    <div class="margen-bt ">
                        <a href="formulario">
                            <img class="img-tasaciones" src="images/tasa-1.jpeg " />
                        </a>
                    </div>
                </div>
                <!------------------------------------------>

                <!-- texto de las imagenesssss-->
                <div class="text-img-tasaciones pos-primer-texto">
                    <a style="color: white;" href="documentacion">
                        ¿Que <span style="font-weight: 600;">necesitamos</span> para TASAR tu propiedad?
                    </a>
                </div>
                <div class="text-img-tasaciones pos-segundo-texto">
                    <a style="color: white;" href="honorarios">
                        Conoce nuestros <span style="font-weight: 600;">HONORARIOS</span>
                    </a>
                </div>
                <div class="text-img-tasaciones pos-tercer-texto">
                    <a style="color: white;" href="formulario">
                        <span style="font-weight: 600;">Completa el FORMULARIO</span> y comencemos a trabajar juntos!
                    </a>
                </div>
                <!--------------------------------------------->



                <!-- texto explicativo-->
                <p class="parrafo">
                    La <span style="font-weight: 600;"> TASACION INMOBILIARIA</span> es un proceso fundamental para determinar el valor preciso de una propiedad. Implica un análisis exhaustivo de diversos elementos, como la ubicacion, caracteristicas
                    físicas y constructivas, estado de conservación, legales, normativas urbanisticas, entre otros factores relevantes. A través de métodos especializados, proporcionamos un informe técnico y profesional que establece el valor monetario
                    real del bien.
                    <br> Es esencial destacar que dicha tasación debe ser llevada a cabo por un <span style="font-weight: 600;"> PROFESIONAL</span> capacitado y objetivo, que utilice métodos y criterios de valoración reconocidos y aceptados en el sector.
                    Esto garantiza la precisión y la imparcialidad en la determinación del valor de un inmueble.
                    <br> En <span style="font-weight: 600;"> NOVA INMOBILIARIA, </span> contamos con nuestra <span style="font-weight: 600;"> Martillera Pública y Corredora Inmobiliaria, SARTOR PAOLA,</span> matrícula N°663, quien se mantiene constantemente
                    actualizada y capacitada para ofrecerte un servicio completo, profesional y honesto en cada etapa del proceso. Confía en nuestro equipo para obtener una tasación inmobiliaria confiable y precisa.
                </p>
                <!------------------------------>

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