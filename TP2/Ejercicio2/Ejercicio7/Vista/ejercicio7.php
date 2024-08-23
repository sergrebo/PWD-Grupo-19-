<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Form Calculadora</title>
</head>
<body>
    <form action="Action/action-ej7.php" method="get" id="formulario" class="needs-validation row g-3"  novalidate>
        <div class="mb-3">
                <input type="text" name="numero1" id="validationCustom01" class="form-control" required>
        </div>
        <div class="mb-3">
                <input type="text" name="numero2" id="validationCustom02" class="form-control" required>
        </div>
        <div class="mb-3">
                <select name="Operacion" id="validationCustom03" class="form-select" required >
                        <option value="" disabled selected>Selecciona una Operacion</option>
                        <option value="SUMA">SUMA</option>
                        <option value="RESTA">RESTA</option>
                        <option value="MULTIPLICACION">MULTIPLICACION</option>
                </select>
        </div>
        <div>
                 <input type="submit" class="btn btn-primary mx-3">
        </div>
    </form>

    <script src="Assets/validation.js"></script>
</body>
</html>