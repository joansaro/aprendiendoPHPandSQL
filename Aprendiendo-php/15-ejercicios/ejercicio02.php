<?php
/**
 * Ejercicio 2.
 * Programa que añada valaros a un array mientras que
 * su longirud sea menor a 120 y mostrar en pantalla.
 */

$cadena = [];

for ($i = 0; $i <= 120 ; $i++) { 
    array_push($cadena, $i);
}

var_dump($cadena);