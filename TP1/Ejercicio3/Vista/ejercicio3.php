<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Saludo</title>
</head>
<body> -->
<?php
        include_once '../../../estructura/cabecera-retorno.php';
?>

        <h1 class="mt-4 text-center">Ejercicio N°3</h1>
        <form action="Action/action-ej3.php" method="post" class="container">
                <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" required class="form-control">
                </div>
                <div class="mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" required class="form-control">
                </div> 
                <div class="mb-3">
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" id="edad" required class="form-control">
                </div> 
                <div class="mb-3">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" required class="form-control">
                </div>
                <div class="mb-3">
                        <input type="submit" class="btn btn-primary mb-4">
                </div>
        </form>
<!-- </body>
</html> -->
<?php
    include_once '../../../estructura/pie.php';
?>