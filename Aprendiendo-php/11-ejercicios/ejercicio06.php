<?php
/*
Ejercicio 6. Mostrar una tabla de html con las tablas de multiplicar del 1 al 10
 */

echo "<table border='1'> <tr>";    //inicio de la tabla
 
    echo "<tr>";    //inicio de la celda 1
        for ($cabecera=1; $cabecera <= 10  ; $cabecera++) { 
            echo "<td>Tabla del $cabecera</td>";
        }
    echo "</tr>";   //final de la celda 1

    echo "<tr>";   //inicio de la celda 2
        for ($i=1; $i <= 10; $i++) { 
            echo "<td>";
                for ($x=1; $x <= 10 ; $x++) { 
                    echo "$i x  $x = ".($i*$x). '<br>';
                }

            echo "</td>";
        }   
    echo "</tr>";   //final de la celda 2



echo "</table>";    //fin de la tabla