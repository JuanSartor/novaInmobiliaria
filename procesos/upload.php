<?php


//quedaste aca tenes q seguir llevarlo de vuelta a la pagina inmuebles
//y despues ver como mostrar las imagenes cuando clickee el boton y permitirle q las elimine




// Ruta donde se guardarán las imágenes
$targetDir = "../imagenes-inmuebles/inmueble-ID-" . $_POST['idUI'] . "/";
// Comprobamos si la carpeta de destino existe, si no, la creamos
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Procesar cada imagen subida
foreach ($_FILES['imagenes']['name'] as $key => $name) {
    $targetFile = $targetDir . basename($_FILES['imagenes']['name'][$key]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Comprobar si el archivo es una imagen real o un archivo falso
    $check = getimagesize($_FILES['imagenes']['tmp_name'][$key]);
    if ($check !== false) {
        // Permitir solo ciertos formatos de imagen
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" || $imageFileType == "webp") {
            // Mover el archivo subido a la carpeta de destino
            if (move_uploaded_file($_FILES['imagenes']['tmp_name'][$key], $targetFile)) {
                echo "El archivo " . htmlspecialchars(basename($_FILES['imagenes']['name'][$key])) . " ha sido subido correctamente.<br>";
            } else {
                echo "Error al subir el archivo " . htmlspecialchars(basename($_FILES['imagenes']['name'][$key])) . ".<br>";
            }
        } else {
            echo "Solo se permiten archivos JPG, JPEG, PNG y GIF.<br>";
        }
    } else {
        echo "El archivo " . htmlspecialchars(basename($_FILES['imagenes']['name'][$key])) . " no es una imagen válida.<br>";
    }
}

header('Location: ../inmueble.php');
exit();
