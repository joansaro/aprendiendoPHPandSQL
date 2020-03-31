<?php
$cantantes = ['two pack', 'Dr Dre', 'Drake', 'Aniceto Molina'];
$numeros = [1,3,5,6,4,5,7,3];

//Ordenar
sort($numeros);
var_dump($numeros);

//Añadir elementos a un array
$cantantes[]= 'Wos';
array_push($cantantes, 'Moggo');

//Eliminar el ultimo indice del array
array_pop($cantantes);

//Eliminar indice en concreto
unset($cantantes[3]);

//Elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Reverse
var_dump(array_reverse($numeros));

//Buscar dentro de un array
$resultado = array_search('two pack', $cantantes);
var_dump($resultado);

//Contar numero de elementos
echo count($cantantes). '<br>';

echo sizeof($cantantes);

