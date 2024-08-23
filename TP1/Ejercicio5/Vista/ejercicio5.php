<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Saludo</title>
</head>
<body>
    <form action="Action/action-ej5.php" method="get">
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
        <div>
                <h3>Nivel de Estudios</h3>
                <label for="nivel">No tiene
                <input type="radio" value="No tiene estudios" name="opcion"></label>

                <label for="">Primarios
                <input type="radio" value="Estudios primarios" name="opcion"></label>

                <label for="">Secundarios
                <input type="radio" value="Estudios Secundiarios" name="opcion"></label>
        </div>
        <div>
                <select name="genero" id="genero">
                        <option value="" disabled selected>Selecciona un Genero</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otrx">Otrx</option>
                </select>
        </div>
        <input type="submit">
    </div>
    </form>
</body>
</html>