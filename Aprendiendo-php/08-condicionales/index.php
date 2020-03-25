<?php

/*Condiciones
IF:
if(condicion){
    instruccion
}else{
    otra instruccion


    OPERADORES DE COMPARACION
== igual
=== identico
!= distinto 
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

    OPERADORES LOGICOS
&&  and  y
||  or   o
!   not  no


}*/

$color = 'rojo';

if ($color == 'rojo'){
    echo "El color es Rojo";
} else {
    echo "El color NO es Rojo";
}

echo '<hr>';

$year = 2020;
if($year == 2020){
    echo 'Estamos en el 2020';
}else{
    "No estamos en el 2020 estamos en el $year";
}

echo '<hr>';

//Ejemplo: verificar si es mayor de edad o menor de edad
$nombre = 'Andrés Santos';
$pais = 'El Salvador';
$ciudad = 'El Triunfo';
$edad = 19;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    
    echo "$nombre Es mayor de edad ";

    if ($pais == 'El Salvador') {

      echo "Vive en $ciudad";

    }else{

        echo 'No es Salvadoreño';
    
    }
} else {
    
    echo $nombre.' Es menor de edad';

}

echo '<hr>';

//Elseif
$dia = 3;

if ($dia == 1) {
    echo 'Lunes';
}else if ($dia == 2) {
    echo 'Martes';
}else if ($dia == 3) {
    echo 'Miercoles';
}else if ($dia == 4) {
    echo 'Jueves';
}else if ($dia == 5) {
    echo 'viernes';
}else{
    echo 'Fin de semana';
}

echo '<hr>';
//Numero mayor que 50 pero menor que 90

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 80;

if ($edad_oficial >= $edad1 && $edad_oficial<= $edad2) {
    echo 'Esta en edad de trabajar';
}else {
    echo 'No puede trabajar';
}

echo '<hr>';

$pais = 'Francia';
if ($pais == 'El Salvador' || $pais == 'Colombia' || $pais == 'España') {
    echo 'En este paies se habla español';
}else {
    echo 'En este pais no se habla español';
}

echo '<hr>';

// SWITH
/*
 $dia = 3;

if ($dia == 1) {
    echo 'Lunes';
}else if ($dia == 2) {
    echo 'Martes';
}else if ($dia == 3) {
    echo 'Miercoles';
}else if ($dia == 4) {
    echo 'Jueves';
}else if ($dia == 5) {
    echo 'viernes';
}else{
    echo 'Fin de semana';
}
 */

$dia = 3;

switch ($dia) {
    case '1':
        echo 'Lunes';
        break;
    case '2':
        echo 'Martes';
        break;
    case '3':
        echo 'Miercoles';
        break;
    case '4':
        echo 'Jueves';
        break;
    case '5':
        echo 'Viernes';
        break;

    default:
        echo 'Fin de semana';
        break;
}

echo "<hr>";

//GOTO
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "Me e saltado 4 echos";