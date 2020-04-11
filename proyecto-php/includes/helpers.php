<?php
//Mostrar errores

function mostrarError($errores, $campo){
    $alerta = "";
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='Alerta alerta-error'> ".$errores[$campo].'</div>';
    }
    return $alerta;
}

function borrarErrores(){

    if (isset($_SESSION['errores'])) {
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);
    }
    
    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }

}