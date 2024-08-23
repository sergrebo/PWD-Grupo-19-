<?php

include_once '../../Control/verificacion.php';




if ($_POST) {
    $datos = $_POST;
    $obj = new verificacion();
    $mensaje = $obj->verificaPass($datos);
}

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
-->
<?php
include_once '../../../../estructura/cabecera-retorno.php';
?>

<body>

    <?php echo $mensaje . "<br>" ?>

    <a href="../ejercicio3.php">Volver</a>

    <?php
    include_once '../../../../estructura/pie.php';
    ?>

    <!--
</body>

</html>