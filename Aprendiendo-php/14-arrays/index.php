<?php
/*
Array:
Un array es una coleecion o conjunto de datos/valores, bajo un unico nombre 
para acceder a esos valores podemos usar un indice numerico o alfa numerico
*/

$pelicula ="Bataman";
$peliculas = array('Batman', 'Spiderman', 'Superman');
$cantantes = ['two pack', 'Dr Dre', 'Drake'];
$personas = [
    'nombre' => 'Andrés',
    'apellidos' => 'Santos',
    'alias' => 'Joansaro',
];

var_dump($personas['apellidos']);
echo $personas['apellidos'];


//echo $peliculas[1]. '<br>';
//echo $cantantes[0];

//Recorrer con for
echo "<h1>Listado de peliculas</h1>";
echo '<ul>';
for ($i = 0; $i < count($peliculas) ; $i++) { 
    echo "<li>".$peliculas[$i]."</li>";
}
echo '</ul>';

//recorrer con foreach
echo "<h1>Listado de peliculas</h1>";
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
    # code...
}
echo '</ul>';

//Arrays multidimencionales

$contactos = [
    [
        'nombre' => 'José',
        'apellidos' => 'Santos'
    ],
    [
        'nombre' => 'Andrés',
        'apellidos' => 'Rodriguez'
    ],
    [
        'nombre' => 'Joan',
        'apellidos' => 'Saro'
    ],
];

var_dump($contactos);
echo $contactos[2]['apellidos'];

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}