
<?php
/* 
Ejercicio 5. Mostrar  los numeros impares entre dos numeros que nos lleguen por la url usando GET
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "Los numeros entre $numero1 y $numero2 son:";
    echo '<hr>';

    if ($numero1 < $numero2) {
       
        for ($i = $numero1; $i <= $numero2 ; $i++) { 
            if ($i%2 != 0) {
                echo "$i IMPAR<br>";
            }else {
                echo "$i PAR <br>";
            }
           
        }

        }else{
            echo 'El primer parametro debe ser menor al segundo parametro';
        }

    }else {
        echo '<h1>Introduce correctamente los valores por la url...</h1>';
}

