<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario en PHP.</title>
</head>
<body>
    <h1>Validar Formularios con PHP</h1>

    <?php
    
    if (isset($_GET['error'])) {
        $error = $_GET['error'];

        if ($error == 'Faltan_valores') {
            echo '<strong style = "color:red"> Introduce todos los datos en los campos del formulario</strong>';
        }

        
        if ($error == 'nombre') {
            echo '<strong style = "color:red"> Introduce bien el nombre...</strong>';
        }

        
        if ($error == 'apellidos') {
            echo '<strong style = "color:red"> Los apellidos no son correctos...</strong>';
        }

        
        if ($error == 'edad') {
            echo '<strong style = "color:red"> Introduce una edad correcta...</strong>';
        }

        
        if ($error == 'email') {
            echo '<strong style = "color:red"> El correo es erroneo...</strong>';
        }

        
        if ($error == 'password') {
            echo '<strong style = "color:red"> Introduce una contraseña con mas de 5 valores...</strong>';
        }
    }
    ?>
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre">Nombre</label> <br>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"> <br>

        <label for="apellidos">Apellidos</label> <br>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"> <br>

        <label for="edad">Edad</label> <br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"> <br>

        <label for="email">E-mail</label> <br>
        <input type="email" name="email" required="required"> <br>

        <label for="pass">Password</label> <br>
        <input type="password" name="pass" required="required"> <br>
        <hr>

        <input type="submit" value="enviar">
    </form>
</body>
</html>