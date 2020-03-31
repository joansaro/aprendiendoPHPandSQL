<?php
/**
 * Ejercicio 4.
 * Crear Scrip que tenga 4 variables 1 array, otra string, 1 int y otra booleana y que imprima un mensaje segun el tipo de 
 * variable que sea
 */

 $variable1 = [1,2,3,4,5];
 $variable2 = 'Hola mundo';
 $variable3 = 3;
 $variable4 = false;

 echo gettype($variable1).'<br>';
 echo gettype($variable2).'<br>';
 echo gettype($variable3).'<br>';
 echo gettype($variable4).'<br>';

 //     ó 

 if (is_array($variable1)) {
    echo "Es un array".'<br>';
 }

 if (is_string($variable2)) {
    echo "Es una cadena".'<br>';
 }

 if (is_int($variable3)) {
    echo "Es un entero".'<br>';
 }
 if (is_bool($variable4)) {
    echo "Es un booleano".'<br>';
 }