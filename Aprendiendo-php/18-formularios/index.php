<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
            <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" autofocus="autofocus" maxlength = "4" pattern= "[A-Z]+">
            </p>
            <p>
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="" required="required" placeholder="Mete apellido" disabled = "disabled">
            </p>
            <hr>

            <p>
                <label for="apellidos">Boton:</label>
                <input type="button" name="apellidos"  value= "Apachurrame">
            </p>
            <hr>

            <p>
                <label for="apellidos">Check box:</label> <br>
                Hombre: <input type="checkbox" name="apellidos" name = "sexo" value = "hombre">
                Mujer: <input type="checkbox" name="apellidos" name = "sexo" value = "mujer">

            </p>
            <hr>

            <p>
                <label for="apellidos">Color:</label>
                <input type="color" name="color">
            </p>
            <hr>

            <p>
                <label for="correo">Correo:</label>
                <input type="email" name="email" >
            </p>
            <hr>

            <p>
                <label for="archivo">File:</label>
                <input type="file" name="apellidos">
            </p>
            <hr>

            <p>
                <label for="number">Numerico:</label>
                <input type="number" name="apellidos">
            </p>
            <hr>

            <p>
                <label for="number">Contraseña:</label>
                <input type="password" name="apellidos">
            </p>
            <hr>

            <p>
                <label for="Continente">Continente:</label><br>
                Europa<input type="radio" name="continente" value="Europa"> <br>
                America<input type="radio" name="continente" value="America"><br>
                Asia<input type="radio" name="continente" value="Asia"><br>
            </p>
            <hr>

            <p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </p>
            <hr>

            <p>
                Peliculas:
                <select name="peliculas" id="">
                    <option value="spiderman">Spiderman</option>
                    <option value="batman">Batman</option>
                    <option value="flash">Flash</option>
                    <option value="green arrow">Green arrow</option>
                </select>
            </p>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
