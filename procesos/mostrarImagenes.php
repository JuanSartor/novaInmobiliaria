<?php

include("../clases/conexion.php");


$miVariable = $_POST['miVariable'];


// Directorio donde se encuentran las imágenes
$directorio = '../imagenes-inmuebles/inmueble-ID-' . $miVariable . "/";


// con este if verifico que el directorio existe, si existe es porque hay imagenes
if (!is_dir($directorio)) {
    echo "<b>NO SE ENCONTRARON IMAGENES!</b><br><br>";
} else {
    // Obtener la lista de archivos en el directorio
    $archivos = scandir($directorio);

    // Iterar sobre los archivos
    foreach ($archivos as $archivo) {
        // Ignorar directorios y archivos ocultos
        if ($archivo != '.' && $archivo != '..') {
            // Generar la etiqueta <img> para cada imagen

            $nuevo_dir = str_replace("../", "", $directorio);

            echo '<a target="_blank" href="' . $nuevo_dir . $archivo . '"><img style="margin:2px;" width="200px" id="' . $archivo . '" src="' . $nuevo_dir . $archivo . '" alt="Imagen">
        </a>';


            echo '<input class="radio-principal" title="imagen principal" data-id="' . $miVariable . '" style="position: absolute;" type="radio" name="opcion" value="' . $archivo . '" > ';




            echo ' <button title="Eliminar" class="eliminar-imagen" data-id="' . $nuevo_dir . $archivo . '" style="position:relative; bottom:150px; right:30px;" type="button" >
        <span aria-hidden="true">&times;</span>
      </button>';




            // echo $archivo;
        }
    }
}
?>

<script type="text/javascript">
    /** funcion para eliminar imagen */
    $(".eliminar-imagen").click(function() {

        dataId = $(this).data('id');
        rutaCompleta = "../" + dataId;


        alertify.confirm('Eliminar Imagen', '¿Esta seguro que desea eliminar la imagen?',
            function() {

                $.ajax({
                    url: 'procesos/deleteImage.php',
                    type: 'POST',
                    data: {
                        ruta: rutaCompleta
                    },
                    success: function(response) {
                        // Manejar la respuesta del servidor si es necesario
                        console.log(response);
                        // Eliminar la imagen del DOM si la eliminación fue exitosa
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores de AJAX si es necesario
                        console.error(error);
                    }
                });


            },
            function() {});


    });







    // funcion para seleccionar la imagen principal

    $(".radio-principal").click(function() {

        idInmueble = $(this).data('id');
        valorSeleccionado = $(this).val();

        $.ajax({
            type: "POST",
            data: {
                idInmuebleSeleccionado: idInmueble,
                imagenSeleccionada: valorSeleccionado
            },
            url: "procesos/actualizarImagenPrincipal.php",
            success: function() {




            },
            error: function() {


            }

        });


    });
</script>