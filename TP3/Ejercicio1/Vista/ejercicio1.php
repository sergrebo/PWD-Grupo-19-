<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Subir archivo</h2>
    <form action="./Action/subirArchivo.php" method="post" enctype="multipart/form-data">
        <label for="file">Selecciona un archivo (.doc o .pdf):</label>
        <br><br>
        <input type="file" name="miArchivo" id="miArchivo" accept=".doc,.pdf" required>
        <br><br>
        <input type="submit" name="input_submit" id="input_submit" value="Subir archivo">
    </form>
</body>
</html>