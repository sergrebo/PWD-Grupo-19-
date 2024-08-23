<?php

include_once '../../Control/ControladorNumero.php';
include_once '../../Control/Utils/funciones.php';


$numero = darDatosSubmitted($_GET['numero']);



$controlador = new ControladorNumero();

$mensaje =  $controlador -> signoNumero($numero);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>El numero es <?php echo $mensaje ?></p>
    <a href="../index.php">Volver a ingregar un numero</a>
</body>
</html>