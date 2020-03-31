<?php
/**
 * Crear un array con el contenido de la tabla:
 * Accion   aventura    Deportes
 * GTA      TLOZ        FIFA 20
 * COD      MARIO BROS  PES 20
 * PUBG     CRASH       UFC 20
 * 
 * Cada fila debe estar en un fichero separado
 */

 $tabla = [
    "ACCION" => ['GTA V', 'Call of Duty', 'PUBG'],
    "AVENTURA" => ['The Legend of Zelda', 'Super Mario Bros', 'Crash Bandicoot'],
    "DEPORTES" => ["FIFA 20", "PES 20", "UPC 20"]
 ];

 $categorias = array_keys($tabla);
 
 ?>



<table border="1">
    <?php require_once 'ejercicio05/encabezados.php'; ?>
    <?php require_once 'ejercicio05/primeraFila.php'; ?>
    <?php require_once 'ejercicio05/segundaFila.php'; ?>
    <?php require_once 'ejercicio05/terceraFila.php'; ?>
</table>