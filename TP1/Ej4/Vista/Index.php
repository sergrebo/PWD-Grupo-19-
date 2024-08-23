<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Saludo</title>
</head>
<body>
    <form action="Action/action-ej4.php" method="get">
<div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
</div>
<div>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>
</div> 
<div>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" required>
</div> 
<div>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" required>
</div>
<div>
        <input type="submit">
    </div>
    </form>
</body>
</html>