<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>
<body>
    <?php
        require_once 'include/cabecera.php'
    ?>

    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>   
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dicta a cupiditate non ea doloribus asperiores alias consequuntur ad! Reprehenderit tempora est alias quam incidunt ullam magni illo earum debitis.
        </p>
    </div>
    <hr>
  
    <?php
        require_once 'include/footer.php'
    ?>

</body>
</html>

<?php