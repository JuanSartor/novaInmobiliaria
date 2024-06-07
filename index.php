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
        bottom: 650px;
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

    @media (max-width:600px) {
        .texto-desktop {
            display: none;
        }

        .section-main-bunner {
            padding: 0px 0 0px !important;
        }

        html.rd-navbar-fixed-linked .page {
            padding-top: 0px !important;
        }

        .page-header {
            padding-bottom: 0.1px !important;
        }

        .txt-prop-destacadas {
            font-size: 20px;
        }

        .estrella-der {
            font-size: 20px;
            left: 0px;
        }

        .estrella-izq {
            font-size: 20px;
            right: 0px;
        }

        .txt-nuestras {
            font-size: 15px;
        }

        .ubi-mobb-nues {
            position: relative;
            top: 8px;
        }

        .ubi-mobb-delMes {
            position: relative;
            top: 3px;
        }

        .section-lg {
            padding: 10px 0 !important;
        }

        .margen-h2 {
            margin-top: 5px;
            text-align: left !important;
            font-size: 22px;
        }

        .button-md {
            top: 297px !important;
            margin-inline: auto !important;
        }

        .primer-img {
            margin-top: -50px;
            right: 0px;
            height: 300px;
            margin-bottom: 55px;
        }

        .ajust-mob {
            text-align: left !important;
            font-size: 15px !important;
        }

        .btn-wrap {
            text-align: center;
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

        .buscador {
            display: none;
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

        .btn-wrap-whatsap {
            margin-top: 27px !important;
            margin-left: 100px;
        }

        /* ajuste a las imagenes de fondo blanco */
        .segunda-img {
            margin-top: 0px;
        }

        .subtitle-2 {
            font-size: 15px !important;
        }

        .segunda-img {
            height: 300px;
        }

        .btn-mas-info-naranja {
            top: -15px !important;
            margin-bottom: 20px;
        }

        .sacar-margen-fondo-blanco-mobile {
            margin-bottom: -30px;
        }

        .sacar-margen-fondo-blanco-mobile-segundo {
            margin-bottom: -10px;
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