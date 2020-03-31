<?php
/**
 * Ejercicio 3.
 * Programa que comprueve si una variable esta basia y si si, reyenarla con texto en minuscula y mostrarla como mayuscula
 * 
 */

 $texto = "";

 if (empty($texto)) {
     $texto = 'Hola soy el relleno de la variable texto';
     $textoMayus = strtoupper($texto);

     echo "<strong> $textoMayus</strong>";
    }else{
        echo "La variable tiene este contenido dentro: ".$texto;
    }