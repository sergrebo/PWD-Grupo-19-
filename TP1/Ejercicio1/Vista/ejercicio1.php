
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Numero</title>
</head>
<body> -->
<?php
include_once '../../../estructura/cabecera-retorno.php';
?>
    <h1 class="mt-4 text-center">Ejercicio N°1</h1>
    <main class="container">
        <h2>Consigna</h2>
        <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
        llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
        enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
        respuesta, que permita volver a la página anterior.</p>
        
    
    <form action="Action/action-ej1.php" method="get">
        <label for="">Numero:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" >
    </form>
    </main>
    
<?php
    include_once '../../../estructura/pie.php';
?>
    
<!-- </body>
</html> -->