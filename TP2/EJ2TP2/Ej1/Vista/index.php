
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Formulario Numero</title>
</head>
<body>
    <div class="container">
    <h1>Ejercicio N°1</h1>
    <main>
        <h2>Consigna</h2>
        <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
        llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
        enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
        respuesta, que permita volver a la página anterior.</p>
        
    
    <form action="Action/action-ej1.php" id="formulario" method="get" class="row g-3 needs-validation mx-3">
        <div class="mb-3">
        <label for="validationCustom01">Numero:</label>
        <input type="text" name="numero" id="validationCustom01" class="form-control" required>
    </div>
        <input type="submit" class="btn btn-primary" >
    </form>
    <script src="Assets/validation.js"></script>
    </main>
   </div> 

    
</body>
</html>