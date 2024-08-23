<?php

include_once "../../Control/Calculadora.php";
include_once '../../Control/Utils/funciones.php';


    $datos = darDatosSubmitted($_GET);
    $obj = new Calculadora();
    $resultado = $obj-> Operaciones($datos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php echo $resultado; ?> 
    <br><a href="../index.php">Volver a la Calculadora</a>
</body>
</html> 