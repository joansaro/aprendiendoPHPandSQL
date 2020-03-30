<?php

//Debuggear
$nombre = 'José Andrés';
var_dump($nombre);

//Para fechas
echo date('d-M-Y');
echo '<br>';

echo time();
echo '<br>';

//Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);
echo '<br>';

echo "Nuero aleatorio entre 10 y 40: ".rand(10, 40);
echo '<br>';

echo "Numero Pi: ".pi();
echo '<br>';

echo "Redondear: ".round(7.891234, 1);
echo '<br>';

//Mas funciones nesesarias
echo gettype($nombre);
echo '<br>';


//identificar tipado
if(is_string($nombre)){
    echo 'Es un string';
}
echo '<br>';

if (!is_float($nombre)) {
    echo 'La variable nombre no es un numero con decimal';
    # code...
}
echo '<br>';

//Comprovar si existe una variable
if (isset($edad)) {
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

echo '<br>';

//Limpiar espacios
$frase = "      mi contenido    ";
var_dump(trim($frase));

echo '<br>';

//Eliminar varianble o indice

$year = 2020;
unset($year);
echo '<br>';

//Comprobar variable vasia

$texto= "";
if (empty(trim($texto))) {
    echo 'La variable texto esta basia';
} else{
    echo 'la variable texto tiene contenido';
}
echo '<br>';

//Contar caracteres de un string

$string = '12345';
echo strlen($string);
echo '<br>';

//Encontrar caracter

$frase = 'Tengo un amigo muy fino que se llama agripino';
echo strpos($frase, 'amigo');
echo '<br>';

//Reemplazar palabras de un string
$frase = str_replace('amigo', 'enemigo',$frase);
echo $frase;