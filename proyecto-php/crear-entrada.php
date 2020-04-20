<?php require_once 'includes/redireccion.php'; ?>

<!-- CABECERA -->
<?php require_once 'includes/cabecera.php'; ?>

<!-- BARRA LATERAL -->
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">
    <h1>Crear entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido.
    </p>
    <br>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo de la entrada</label>
        <input type="text" name="titulo">
        <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'titulo') : ''?>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" cols="30" rows="10"></textarea>
        <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'descripcion') : ''?>

        <label for="categoria">categoria</label>
        <select name="categoria" id="">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
            ?>

                <option value="<?=$categoria['id']?>">
                    <?=$categoria['nombre']?>
                </option>

            <?php
                    endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'categoria') : ''?>



        <input type="submit" value="Guardar">
    </form>

    <?php borrarErrores(); ?>

</div>

<!-- PIE DE PAGINA -->
<?php require_once 'includes/pie.php'; ?>