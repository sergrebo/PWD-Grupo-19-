<?php

include_once '../../Utils/funciones.php';
include_once '../../Control/Archivo.php';

$datos = darDatosSubmitted();
$objArchivo = new Archivo();
$arregloRespuesta = $objArchivo->subirArchivo($datos);
$mensaje = "";
if ($arregloRespuesta['estado'] == 1) {
    $mensaje = "<h4>Contenido del archivo</h4><textarea rows='10' cols='50' readonly>" . $arregloRespuesta['contenido'] . "</textarea>";
} 
else {
    switch ($arregloRespuesta['estado']) {
        case -3:
            $mensaje = "<p>Error: No se pudo acceder al archivo temporal.</p>";
            break;
        case -2:
            $mensaje = "<p>Error: Tipo de archivo no permitido.</p>";
            break;
        case -1:
            $mensaje = "<p>Error: No se pudo copiar el archivo al directorio.</p>";
            break;
        case 0:
        default:
            $mensaje = "<p>Error: No se pudo leer el archivo.</p>";
            break;
    }
}


?>

<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivo</title>
</head>
<body>
    <h2>Estado del archivo</h2>
    
    <?php
        echo $mensaje;
    ?>
    <br>
    <a href="../ejercicio2.php">Volver</a>
</body>
</html>