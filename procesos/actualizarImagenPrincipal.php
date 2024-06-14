<?php

include("../clases/conexion.php");
$conexion = conectar();

$idInmuebleSeleccionado = $_POST['idInmuebleSeleccionado'];
$imagenSeleccionada = $_POST['imagenSeleccionada'];

$sourcePath = '../imagenes-inmuebles/inmueble-ID-' . $idInmuebleSeleccionado . '/' . $imagenSeleccionada;




// Obtener el tamaño original de la imagen
list($originalWidth, $originalHeight) = getimagesize($sourcePath);

// Crear una nueva imagen en blanco con el tamaño deseado
$resizedImage = imagecreatetruecolor(335, 200);


$imageInfo = getimagesize($sourcePath);

// Obtener el tipo MIME de la imagen
$mime = $imageInfo['mime'];

$formato = '';
// Determinar el formato en función del tipo MIME
switch ($mime) {
    case 'image/jpeg':
        // Crear una imagen a partir del archivo de origen
        $sourceImage = imagecreatefromjpeg($sourcePath); // Cambia esto si no es un JPEG
        $formato = 'jpg';
        break;
    case 'image/png':
        // Crear una imagen a partir del archivo de origen
        $sourceImage = imagecreatefrompng($sourcePath);
        $formato = 'png';
        break;
    case 'image/webp':
        // Crear una imagen a partir del archivo de origen
        $sourceImage = imagecreatefromwebp($sourcePath);
        $formato = 'webp';
        break;
    default:
        return 'Formato desconocido';
}



$destinationPath = '../imagenes-inmuebles/img-secciones/' . $idInmuebleSeleccionado . '.' . $formato;
// Redimensionar la imagen
imagecopyresampled(
    $resizedImage,
    $sourceImage,
    0,
    0,
    0,
    0,
    335,
    200,
    $originalWidth,
    $originalHeight
);

// Guardar la imagen redimensionada en el destino especificado
imagejpeg($resizedImage, $destinationPath);

// Liberar la memoria
imagedestroy($sourceImage);
imagedestroy($resizedImage);



$sql = "UPDATE inmueble SET imagen_principal='$imagenSeleccionada' WHERE id_inmueble='$idInmuebleSeleccionado'";

mysqli_query($conexion, $sql);
