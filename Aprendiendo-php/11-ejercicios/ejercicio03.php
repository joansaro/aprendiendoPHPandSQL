<?php
/* 
Ejercicio 3. imprimir por pantalla los cuadrados (un numero por el mismo) de los primeros 40 numeros natuales
PD: usar while.
*/
$contador = 1;
while ($contador <= 45) {
    echo "$contador al cuadrado = ". $contador*$contador .'<br>';
    $contador++;
}

echo '<hr>';
//Usando el bucle for


for ($contador = 1; $contador <= 45; $contador++) {
    echo "$contador al cuadrado = ". $contador*$contador .'<br>';
}