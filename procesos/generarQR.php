<?php
include('../librerias/phpqrcode/qrlib.php');

$parametro2 = htmlspecialchars($_GET['qr'], ENT_QUOTES, 'UTF-8');
// Definir el contenido del código QR
$content = 'https://inmobiliarianova.com.ar/visitarpropiedad.php?inmueble=' . $parametro2;


// QRcode::png($content);



// Generar el código QR en una variable
ob_start();
QRcode::png($content, null, QR_ECLEVEL_H, 30); // El número 20 aquí determina el tamaño del código QR
$imageData = ob_get_contents();
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <title>Nova Inmobiliaria</title>
    <style>
        /* Estilo para la imagen del código QR */
        .qr-code {
            display: block;
            margin: 0 auto;
            /* Ajustar el tamaño de la imagen */
            width: 300px;
            /* Ajusta este valor según sea necesario */
            height: 300px;
            /* Ajusta este valor según sea necesario */
        }
    </style>
</head>

<body>

    <!-- Mostrar la imagen del código QR -->
    <img class="qr-code" src="data:image/png;base64,<?php echo base64_encode($imageData); ?>" alt="Código QR">
</body>

</html>