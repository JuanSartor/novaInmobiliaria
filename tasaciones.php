<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <meta name="description" content="Nova Inmobiliaria un grupo de profesionales a tu disposición, para asesorarte y facilitarte tus operaciones en el mercado inmobiliario: Tasaciones - Administración de Propiedades - Compra Venta de Inmuebles - Proyectos Inmobiliarios.">
    <meta charset="utf-8">

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
    <link rel="stylesheet" href="css/style-tasaciones.css">
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