<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
    <body>
        <h1>FORMULARIO EN PHP</h1>
        <form method="POST" action="resivir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" >
            </p>
            <p>   
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" >
            </p>

            <input type="submit" value="Enviar datos">
        </form>
    </body>
</html>