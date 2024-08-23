<?php

include_once '../../Utils/funciones.php';
include_once '../../Control/Archivo.php';

$datos = darDatosSubmitted();
$objArchivo = new Archivo();
$respuesta = $objArchivo->subirArchivo($datos);

$mensajes = [
    1 => "El archivo <a href='../../Archivos/" . $datos['miArchivo']['name'] . "' target='_blank'>" . $datos['miArchivo']['name'] . "</a> se ha copiado con éxito.",
    0 => "Error, no se pudo cargar el archivo.",
    -1 => "Error, el archivo supera el tamaño máximo permitido.",
    -2 => "Error, tipo de archivo no permitido.",
    -3 => "Error, no se pudo acceder al archivo temporal."
];

$mensaje = $mensajes[$respuesta];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivo</title>
</head>
<body>
    <h2>Estado del archivo</h2>
    
    <?php
    echo "<p>$mensaje</p>";
    ?>

    <a href="../ejercicio1.php">Volver</a>
</body>
</html>