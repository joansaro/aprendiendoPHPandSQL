<?php
/*
FOR

for (exprecion inicial; contador ; actualizacion de contador) { 
    bloque de instrucción...
}
*/
/*
$resultado = 0;

for ($numero = 0; $numero <=100 ; $numero++) { 
    //$resultado = $resultado + $numero;
    $resultado += $numero;
    //echo "<p>$resultado</p>;"
    
}

echo "<h1>El resultado es: $resultado</h1>";

echo '<hr>';
*/
//EJEMPLO TABLA DE MULTIPLICAR
/*
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


*/


if (isset($_GET['numero'])) {
    //Cabiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero.</h1>";

for($contador = 1; $contador <=10; $contador++ ) {

    if ($numero == 45) {
        echo "No se pueden mostrar estas operacioes, estan prohibidas;";
    break;
    }
    echo "$numero x $contador =". ($numero * $contador). '<br>';
}

echo '<hr>';