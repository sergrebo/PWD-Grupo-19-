<?php

include_once "../../Control/Persona.php";
include_once '../../Control/Utils/funciones.php';



$datos = darDatosSubmitted($_POST);
$obj = new Persona();
$saludo = $obj->saludo($datos);

?>

<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>

-->
<?php
include_once '../../../../../estructura/cabecera-retorno.php';
?>

<body>
    <div class="container">
        <?php echo $saludo; ?>
    </div>

    <?php
    include_once '../../../../../estructura/pie.php';
    ?>

    <!--
</body>
</html> 