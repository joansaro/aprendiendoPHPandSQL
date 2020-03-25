<?php
/*
Ejercicio 2. Escribir un scrip en php que nos debualva todos los numeros pares del 1 al 100
*/

for ($i=1; $i <=100 ; $i++) { 
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
}