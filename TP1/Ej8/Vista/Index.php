<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Saludo</title>
</head>
<body>
    <form action="Action/action-ej8.php" method="post">

<div>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" required>
</div> 

<div>
        <div>
                <h3>Es estudiante?</h3>
                <label for="nivel">NO
                <input type="radio" value="NO" name="estudiante"></label>

                <label for="">SI
                <input type="radio" value="SI" name="estudiante"></label>

        </div>
        
        <input type="submit">
    </div>
    </form>
</body>
</html>