<?php
/**
 * Sesion:
 * Almacenar y persistir datos del usuario mientras que nacega en un sitio web
 * hasta que cierra sesion o cierra el navegador.
 */

 //Iniciar la sesion
session_start();
$varianle_normal = 'Soy una cadena de texto';   //VARIABLE LOCAL

$_SESSION['variable_persistente'] = 'HOLA SOY UNA SESION ACTIVA'; //VARIABLE DE SESION

echo $varianle_normal.'<br>';
echo $_SESSION['variable_persistente'];

?>