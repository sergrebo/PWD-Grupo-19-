<?php

    include_once "../../Control/Horas.php";
    include_once '../../Control/Utils/funciones.php';

        $datos = darDatosSubmitted($_GET);
        
        $obj = new Horas;
        $horasTotales = $obj->sumaHoras($datos);
    

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body>
        <h1>Cantidad de horas semanales <strong> <?php echo $horasTotales ?> </strong></h1>
    </body>
    </html>


