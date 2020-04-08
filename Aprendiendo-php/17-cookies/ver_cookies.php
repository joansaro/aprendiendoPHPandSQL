<?php
/**
 * Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable suérglobal,
 * es un array asociativo
 */

 if (isset($_COOKIE['micookie'])) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
 }else{
     echo "No existe la cookie";
 }

echo '<hr>';

 if (isset($_COOKIE['unyear'])) {
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo 'No existe la cookie';
}

echo '<hr>';

?>
<a href="crear_cookies">Crear mis galletas</a>
<a href="borrar_cookies.php">Borrar mis galletas</a>