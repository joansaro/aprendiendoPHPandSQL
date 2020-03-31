<?php
/**
 * Ejercicio 1. Hacer unnarray con 8 numeros enteros y que haga lo siguiente
 *  1.Recorrerlo y mostrarlo 
 *  2.Ordenarlo y mostrarlo
 *  3.Mostrar su longitus
 *  4.Buscar algun eleemento(Buscar por el parametro que llegue en el url)
 */

 echo "<h1> Crear array</h1>";
 $numeros = [50, 34, 65, 23, 56, 64, 98, 34];

//Funciones
function mostrar($numeros){
    $resultado = "";

   foreach ($numeros as $numero) {
       $resultado .= $numero. " <br> ";
   }
   return $resultado;
}


 echo "<hr>";
//Recorrer el array
 echo "<h2>Recorrer el array</h2>";
 echo mostrar($numeros);
 echo "<hr>";

 //Ordenarlo
 echo "<h2>Ordenar el array</h2>";
 asort($numeros);
 echo mostrar($numeros);
 echo "<hr>";

 //Longitud
 echo "<h2>Longitud del array</h2>";
 $longitud = count($numeros);
 echo $longitud;
 echo "<hr>";

 //buscar
 echo "<h2>Buscar en el array el numero 23</h2>";
if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];
    $search = array_search($busqueda, $numeros);

    if (!empty($search)) {
        echo "<h3> El numero buscado existe en el array, en el indice: $search </h3>";
    }else{
        echo "<h3> El numero buscado NO existe en el array, en el indice: $search </h3>";
    }

}else{
    echo "<h3> No se esta resiviendo mingun parametro por la url </h3>";
}

