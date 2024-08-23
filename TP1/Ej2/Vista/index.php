<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form horas</title>
</head>
<body>
    <h1>Programacion Web Dinamica</h1>
    <h2>horas de cursado</h2>
    <form action="Action/action-ej2.php" method="get">
        <h3>Ingrese las horas</h3>
            <div>
                <label for="hora-lunes">Lunes</label>
                <input type="number" name="hora-lunes" id="hora-lunes" required>
            </div> 
            <div>
                <label for="hora-martes">Martes</label>
                <input type="number" name="hora-martes" id="hora-martes" required>
            </div> 
            <div>
                <label for="hora-miercoles">Miercoles</label>
                <input type="number" name="hora-miercoles" id="hora-miercoles" required>
            </div>  
            <div>
                <label for="hora-jueves">Jueves</label>
                <input type="number" name="hora-jueves" id="hora-jueves" required>
            </div> 
            <div>
                <label for="hora-viernes">Viernes</label>
                <input type="number" name="hora-viernes" id="hora-viernes" required>
            </div>

            <input type="submit">
    </form>
</body>
</html>