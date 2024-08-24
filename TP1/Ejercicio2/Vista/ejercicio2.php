<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form horas</title>
</head>
<body> -->
<?php
    include_once '../../../estructura/cabecera-retorno.php';
?>
    <div class="container">
    <h1 class="mt-4 text-center">Ejercicio N°2</h1>
    <h2>Horas de cursado</h2>
    <form action="Action/action-ej2.php" method="get">
        <h5>Ingrese las horas</h5>
            <div class="mb-3">
                <label for="hora-lunes">Lunes</label>
                <input type="number" name="hora-lunes" id="hora-lunes" required class="form-control">
            </div> 
            <div class="mb-3">
                <label for="hora-martes">Martes</label>
                <input type="number" name="hora-martes" id="hora-martes" required class="form-control">
            </div> 
            <div class="mb-3">
                <label for="hora-miercoles">Miercoles</label>
                <input type="number" name="hora-miercoles" id="hora-miercoles" required class="form-control">
            </div>  
            <div class="mb-3">
                <label for="hora-jueves">Jueves</label>
                <input type="number" name="hora-jueves" id="hora-jueves" required class="form-control">
            </div> 
            <div class="mb-3">
                <label for="hora-viernes">Viernes</label>
                <input type="number" name="hora-viernes" id="hora-viernes" required class="form-control">
            </div>

            <input type="submit" class="btn btn-primary mb-4">
    </form>
    </div>
<!-- </body>
</html> -->

<?php
    include_once '../../../estructura/pie.php';
?>