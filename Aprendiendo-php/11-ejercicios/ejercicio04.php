<?php
/*
 Ejercicio 4. Recoger 2 numeros por la url y hacer las operaciones basicas
 */

 var_dump($_GET);

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
 $numero1 = $_GET['numero1'];
 $numero2 = $_GET['numero2'];

 echo '<h1>CALCULADORA</h1>';

 echo "Suma: $numero1 + $numero2 = ". ($numero1 + $numero2).'<br>';
 echo "Resta: $numero1 - $numero2 = ". ($numero1 - $numero2).'<br>';
 echo "Multiplicación: $numero1 x $numero2 = ". ($numero1 * $numero2).'<br>';
 echo "Dicición: $numero1 / $numero2 = ". ($numero1 / $numero2).'<br>';



}else {
    echo '<h1>Introduce correctamente los valores por la url...</h1>';
}