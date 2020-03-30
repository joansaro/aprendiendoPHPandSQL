<?php
/*
FUNCIONES:
Es un conjunto de instrucciones agrupadas vajo un anombre concreto y que pueden reutilizarse haveces invocando a 
la funcion tantas vecesc como deseemos
function nombreDeMiFuncion(){
    instrucciones
}

nombreDeMiFuncion($mi_parametro);
*/

//Ejemplo 1
function muestraNombres(){
    echo "José Santos <br>";
    echo "Andrés Santos <br>";
    echo "Andrés José Santos <br>";
    echo "Santos Rodríguez <br>";
    echo "<br>";
}

//invocar funcion

muestraNombres();
muestraNombres();
muestraNombres();

echo '<hr>';

//Ejemplo 2

function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero </h3>";
    for ($i=1; $i <=10 ; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = ". $operacion. '<br>';
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);

}else{
    echo 'No hay numeor para realizar la tabla';
}


for ($i=0; $i <= 10 ; $i++) { 
    tabla($i);
}

echo '<hr>';

//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;
    $cadena_texto = "";

    if ($negrita != false) {
        $cadena_texto.='<h1>';
    }

    $cadena_texto.= "Suma: $suma <br>";
    $cadena_texto.= "Resta: $resta <br>";
    $cadena_texto.= "Multiplicación: $multiplicacion <br>";
    $cadena_texto.= "Divición: $divicion <br>";
   

    if ($negrita != false) {
        $cadena_texto.= '</h1>';
    }

    var_dump($cadena_texto);

    return $cadena_texto;
    echo '<hr>';

}

calculadora(12, 30, true);

//Ejemplo 
function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function debuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            .'<br>'.
            getApellidos($apellidos);

    return $texto;
}

echo debuelveElNombre('Andrés', ' Santos');
//echo getNombre('José');
