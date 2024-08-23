<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Calculadora</title>
</head>
<body>
    <form action="Action/action-ej7.php" method="get">
<div>
         
        <input type="text" name="numero1" id="numeros" required>
</div>
<div>
        
        <input type="text" name="numero2" id="numeros" required>
</div>
<div>
                <select name="Operacion" id="Operacion" required>
                        <option value="" disabled selected>Selecciona una Operacion</option>
                        <option value="SUMA">SUMA</option>
                        <option value="RESTA">RESTA</option>
                        <option value="MULTIPLICACION">MULTIPLICACION</option>
                </select>
        
        <input type="submit">
    </div>
    </form>
</body>
</html>