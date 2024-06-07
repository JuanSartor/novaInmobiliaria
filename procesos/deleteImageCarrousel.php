<?php
$rutaImagen = $_POST['ruta'];

// Verificar si el archivo existe antes de intentar eliminarlo
if (file_exists($rutaImagen)) {
    // Intentar eliminar el archivo
    if (unlink($rutaImagen)) {
        echo 'Imagen eliminada correctamente.';
    } else {
        echo 'Error al intentar eliminar la imagen.';
    }
} else {
    echo 'El archivo no existe.';
}
?>