<?php

include_once "../../Control/Entrada.php";
include_once '../../Control/Utils/funciones.php';


    $datos = darDatosSubmitted($_POST);
    $obj = new Entrada();
    $valorEntrada = $obj-> ValorEntrada($datos);

?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de la Entrada</title>
</head>
-->
<?php
include_once '../../../../../estructura/cabecera-retorno.php';
?>

<body>
    <div class="container">
        <?php echo "$" . $valorEntrada; ?>
    <a href="../ejercicio8.php">Volver</a>
    </div>
    
    <?php
    include_once '../../../../../estructura/pie.php';
    ?>
    <!--
</body>
</html> 