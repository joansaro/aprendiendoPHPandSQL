<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos.</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <!-- CABECERA -->
    <header id="cabecera">
        <div id= "logo">
            <a href="index.php">
               Blog de Videojuegos
            </a>
        </div>

            <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>

            </ul>
        </nav>
    </header>


    <div id="contenedor">
        <!-- BARRA LATERAL -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email" name="email">Email</label>
                    <input type="email" name="email">
                  
                    <label for="password" name="password">password</label>
                    <input type="password" name="password" >

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre" name="nombre">Nombre</label>
                    <input type="text" name="nombre">
                
                    <label for="apellidos" name="apellidos">Nombre</label>
                    <input type="text" name="apellidos">

                    <label for="email" name="email">Email</label>
                    <input type="email" name="email">
                  
                    <label for="password" name="password">password</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        
        </aside>

        <!-- CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article id="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem debitis eos illo sed hic magnam qui nulla laboriosam molestiae reprehenderit reiciendis natus corrupti vitae ex, maiores aliquid distinctio, minus repudiandae?
                </p>
            </article>

            <article id="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem debitis eos illo sed hic magnam qui nulla laboriosam molestiae reprehenderit reiciendis natus corrupti vitae ex, maiores aliquid distinctio, minus repudiandae?
                </p>
            </article>

            <article id="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem debitis eos illo sed hic magnam qui nulla laboriosam molestiae reprehenderit reiciendis natus corrupti vitae ex, maiores aliquid distinctio, minus repudiandae?
                </p>
            </article>

            <article id="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem debitis eos illo sed hic magnam qui nulla laboriosam molestiae reprehenderit reiciendis natus corrupti vitae ex, maiores aliquid distinctio, minus repudiandae?
                </p>
            </article>

        </div>

    </div>
    
    <!-- PIE DE PAGINA -->
    <footer id="pie">
        <p>Desarrollado por Joansaro &copy; 2020</p>
    </footer>

</body>
</html>