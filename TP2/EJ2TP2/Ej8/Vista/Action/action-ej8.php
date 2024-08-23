<?php

include_once "../../Control/Entrada.php";
include_once '../../Control/Utils/funciones.php';


    $datos = darDatosSubmitted($_POST);
    $obj = new Entrada();
    $valorEntrada = $obj-> ValorEntrada($datos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de la Entrada</title>
</head>
<body>
    <?php echo "$" . $valorEntrada; ?>
    <a href="../index.php">Volver</a>
</body>
</html> 