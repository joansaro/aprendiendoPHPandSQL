<?php require_once 'includes/redireccion.php'; ?>

<!-- CABECERA -->
<?php require_once 'includes/cabecera.php'; ?>


    <?php
        $entrada = conseguirEntrada($db, $_GET['id']);

        if (!isset($entrada['id'])) {
            header('Location: index.php');
        }
    ?>


<!-- BARRA LATERAL -->
<?php require_once 'includes/lateral.php'; ?>


<div id="principal">
    <h1>Editar entrada</h1>
    <p>
        Edita tu entrada <?=$entrada['titulo']?>   </p>
    <br>
    <form action="guardar-entrada.php?editar=<?=$entrada['id']?>" method="POST">
        <label for="titulo">Titulo de la entrada</label>
        <input type="text" name="titulo" value="<?=$entrada['titulo']?>">
        <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'titulo') : ''?>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" cols="100" rows="15" ><?=$entrada['descripcion']?></textarea>
        <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'descripcion') : ''?>

        <label for="categoria">categoria</label>
        <select name="categoria" id="">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
            ?>

                <option value="<?=$categoria['id']?>" 
                <?=($categoria['id'] == $entrada['categoria_id']) ? 'selected = "selected"' : '' ?>>
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
