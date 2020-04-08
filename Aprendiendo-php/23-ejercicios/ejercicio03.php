<?php
/**
 * Ejercicio 3.
 * Hacer una interfaz de usuario con 2 inputs y 4 botones uno para sumar, restar, dividir, multiplicar
 */
$resultado = false;

 if (isset($_POST['n1']) && isset($_POST['n2'])) {

    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
 
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con PHP.</title>
</head>
<body>

<h1>Calculadora con PHP.</h1>
    <form action="" method="POST">
        <label for="n1">Primer numero:</label> <br>
        <input type="number" name="n1"> <br><br>
           
        <label for="n2">Segundo numero:</label><br>
        <input type="number" name="n2"><br>
            <br>
            <br>
        <input type="submit" value="Suma" name="sumar">
        <input type="submit" value="Resta"name="restar">
        <input type="submit" value="Multiplicar"name="multiplicar">
        <input type="submit" value="Dividir"name="dividir">

    </form>

    <?php
        if($resultado != false){
            echo "<h2> $resultado </h2>";
        }
    ?>

</body>
</html>