<?php
/*
Variables locales: Son las que se declaran dentro de una funcion y estan disponibles solo dentro de la función

Variables globales: Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
 */

 $frase = 'Tengo un amigo muy fino que se llama agripino';  //Variable global
 
 echo $frase;

 function holaMundo(){
    global $frase;

    echo "<h1>$frase</h1>";

    $year = 2020;

    echo "<h1>$year</h1>";

    return $year;
 }

 echo holaMundo();

 echo '<br>';


 //Funciones variables

 function buenosDias(){
    return 'Hola, buenos dias';
 }

 function buenasTardes(){
     return 'Hey!! Que tal a ido la comida?';
 }

 function buenasNoches(){
     return '¿Te vas a dormir ya? Buenas noches';
 }

 $horario = "buenasNoches";
 echo $horario();

