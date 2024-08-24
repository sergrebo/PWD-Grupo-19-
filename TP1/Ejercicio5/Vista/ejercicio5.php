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
    <h1 class="mt-4 text-center">Ejercicio N°5</h1>
    <form action="Action/action-ej5.php" method="get" class="container">
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
                <div class="mb-3">
                        <h3>Nivel de Estudios</h3>
                        <label for="nivel">No tiene
                        <input type="radio" value="No tiene estudios" name="opcion" required></label>

                        <label for="">Primarios
                        <input type="radio" value="Estudios primarios" name="opcion" required></label>

                        <label for="">Secundarios
                        <input type="radio" value="Estudios Secundiarios" name="opcion" required></label>
                </div>
                <div class="mb-3">
                        <select name="genero" id="genero" required>
                                <option value="" disabled selected>Selecciona un Genero</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otrx">Otrx</option>
                        </select>
                </div>
                <input type="submit" class="btn btn-primary mb-4">
        </div>
    </form>
<!-- </body>
</html> -->
<?php
    include_once '../../../estructura/pie.php';
?>