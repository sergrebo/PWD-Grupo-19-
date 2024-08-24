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
    <title>Form Saludo</title>
</head>

-->

<?php
include_once '../../../../estructura/cabecera-retorno.php';
?>

<body>
        <div class="container mb-3">
                <h1 class="mx-3">Fomulario con jQuery y Bootstrap</h1>
                <form action="Action/action-ej6.php" method="post" id="formulario" class="row g-3 needs-validation mx-3" novalidate>
                        <div class="col-md-4 mb-3">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="validationCustom01" required>
                        </div>
                        <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Apellido</label>
                                <input type="text" name="apellido" class="form-control" id="validationCustom02" required>
                        </div>
                        <div class="col-md-4 mb-3">
                                <label for="validationCustom03">Edad</label>
                                <input type="text" name="edad" class="form-control" id="validationCustom03" required>
                        </div>
                        <div class="col-md-4 mb-3">
                                <label for="validationCustom04">Direccion</label>
                                <input type="text" name="direccion" class="form-control" id="validationCustom04" required>
                        </div>



                        <div class="mb-3 ">
                                <h3>Nivel de Estudios</h3>
                                <label for="nivel">No tiene</label>
                                <input type="radio" class="form-check-input" value="No tiene estudios" name="opcion" required>

                                <label for="">Primarios</label>
                                <input type="radio" class="form-check-input" value="Estudios primarios" name="opcion" required>

                                <label for="">Secundarios</label>
                                <input type="radio" class="form-check-input" value="Estudios Secundiarios" name="opcion" required>
                        </div>
                        <div class="mb-3">
                                <select class="form-select" name="genero" id="genero" required>
                                        <option value="" disabled selected>Selecciona un Genero</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otrx">Otrx</option>
                                </select>
                        </div>


                        <div class="mb-3">
                                <h3>Que deportes practicas?</h3>
                                <label for="">Futbol</label>
                                <input class="form-check-input" type="checkbox" value="Futbol" name="deporte">

                                <label for="">Basket</label>
                                <input class="form-check-input" type="checkbox" value="Basket" name="deporte">

                                <label for="">Tennis</label>
                                <input class="form-check-input" type="checkbox" value="Tennis" name="deporte">

                                <label for="">Voley</label>
                                <input class="form-check-input" type="checkbox" value="Voley" name="deporte">

                        </div>
                        <input class="btn btn-primary" type="submit">

                </form>
        </div>
        <script src="Assets/validation.js"></script>

        <?php
        include_once '../../../../estructura/pie.php';
        ?>

        <!--
</body>

</html>