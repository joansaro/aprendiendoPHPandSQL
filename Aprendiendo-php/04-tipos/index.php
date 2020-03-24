<?php

/*
TIPOS DE DATOS
Enteros (Int / integer)= 11;
Coma flotante/ decimales (float /double) = 2.43
Cadenas (String)= 'Hola mundo'
Boleano (bool)= true false
Null = null
Array (Coleccion de datos)
Objetos
*/

$numero = 100;
echo gettype($numero);
$decimal = 23.33;
echo gettype($decimal);
$texto= 'Soy un texto';
$texto1= "Soy un texto $decimal";
echo $texto1;
echo gettype($texto);
$verdadero = true;
echo $verdadero;
echo gettype($verdadero);

//Debugear
$mi_nombre[] = 'José Andrés Santos';
$mi_nombre[] = 'José Andrés Santos';

var_dump($mi_nombre);

?>