<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Form horas</title>
</head>
-->

<?php
include_once '../../../../estructura/cabecera-retorno.php';
?>

<body>
    <h1>Programacion Web Dinamica</h1>
    <h2>horas de cursado</h2>
    <form action="Action/action-ej2.php" method="get" class="row g-3 needs-validation mx-3" id="formulario" novalidate>
        <h3>Ingrese las horas</h3>
            <div class="mb-3">
                <label for="lunes" class="form-label">Lunes</label>
                <input class="form-control" type="text" name="lunes" id="lunes" required>
            </div> 
            <div class="mb-3">
                <label for="martes">Martes</label>
                <input class="form-control" type="text" name="martes" id="martes" required>
            </div> 
            <div class="mb-3">
                <label for="miercoles">Miercoles</label>
                <input class="form-control"  type="text" name="miercoles" id="miercoles" required>
            </div>  
            <div class="mb-3">
                <label for="jueves">Jueves</label>
                <input class="form-control" type="text" name="jueves" id="jueves" required>
            </div> 
            <div class="mb-3">
                <label for="viernes">Viernes</label>
                <input class="form-control" type="text" name="viernes" id="viernes" required>
            </div>

            <input type="submit" class="btn btn-primary">
    </form>
    <script src="Assets/validation.js"></script>

    <?php
    include_once '../../../../estructura/pie.php';
    ?>

    <!--
</body>
</html>