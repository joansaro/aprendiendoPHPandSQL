<?php
/*
Buble While
Estructura de control que itera o repite la ejecucuion de una serie de instrucciones tantas veces como sea nesesario
en base a una condicion

while(condicion){
    bloque de instrucciones...
}

*/
$numero = 0;
while ($numero <= 100) {
    echo "$numero";
    if ($numero != 100) {
        echo ", ";
    }

    $numero++;
}

echo '<hr>';

//Mostrar una tabla de multiplicar con parametro por get
if (isset($_GET['numero'])) {
    //Cabiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero.</h1>";

$contador = 0;
while ($contador <= 10 ) {
    echo "$numero x $contador =". ($numero * $contador). '<br>';
    $contador++;
}

echo '<hr>';
/*
DO WHILE

do {
    # code...
} while (condicion);
*/
$contador = 1;
$edad = 12;

do {
    echo "Tienes acceso $contador <br>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);