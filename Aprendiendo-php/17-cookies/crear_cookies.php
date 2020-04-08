<?php
/**
 * Cookie:
 * Es un fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar datos o reastrear cierta
 * informacion o comportamiento del mismo en la web
 */

 //Crear cookies
//setcookie('nombre', 'Valor que solo puede ser texto', caducidad, ruta, dominio);

//Cookie basica
setcookie("micookie", "Valor de mi galleta");

//Cookie con expiracion
setcookie("unyear", 'Valor de mi cookie de 365', time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>

