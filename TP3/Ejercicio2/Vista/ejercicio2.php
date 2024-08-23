<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>Subir archivo</h2>
    <form action="./Action/subirArchivo.php" method="post" enctype="multipart/form-data">
        <label for="input_archivo">Selecciona un archivo (.txt):</label>
        <br><br>
        <input name="miArchivo" id="miArchivo" type="file" accept=".txt" required>
        <br><br>
        <input type="submit" id="input_submit" name="input_submit">
    </form>
</body>
</html>