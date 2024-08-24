<?php

    include_once "../../Control/Horas.php";
    include_once '../../Control/Utils/funciones.php';

        $datos = darDatosSubmitted();
        
        $obj = new Horas;
        $horasTotales = $obj->sumaHoras($datos);
    

    ?>

<!--     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body> -->
<?php
    include_once '../../../../estructura/cabecera-retorno.php';
?>
    <div class="container mt-4">
        <h1>Cantidad de horas semanales: <strong class="text-primary"> <?php echo $horasTotales ?> </strong></h1> 
    </div>
<!--     </body>
    </html> -->
<?php
    include_once '../../../../estructura/pie.php';
?>


