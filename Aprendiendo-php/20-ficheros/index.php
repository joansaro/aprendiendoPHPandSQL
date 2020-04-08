<?php
/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer archivo
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido. '<br>';

}

//Escribir dentro de archivo
fwrite($archivo, '***Soy un texto metido desde php***');
//Cerrar archivo
fclose($archivo);
*/


//Copiar
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

//Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Eliminar fichero
//unlink('archivito_recopiadito.txt') or die ("Error al copiar");

if (file_exists("ficero_texto.txt")) {
    echo "El achivo existe";
}else {
    echo "El archivo no existe";
}