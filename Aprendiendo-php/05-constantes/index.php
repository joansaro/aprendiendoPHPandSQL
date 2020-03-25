<?php
//El valor de una constante jamas podra modificarse

define('nombre', 'José Andrés');
define('apellidos', 'Santos Rodríguez');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.apellidos.'</h1>';

//Constantes predefinidas

echo PHP_OS .'<br>';
echo PHP_VERSION.'<br>';
echo __FILE__;
echo __FUNCTION__;
echo __LINE__;