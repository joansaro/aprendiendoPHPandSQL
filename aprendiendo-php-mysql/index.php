<?php
//Conectarnos a una base de datos.
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//Comprobar si la coneccion es correcta
if(mysqli_connect_errno()){
    echo "La conexion a la base de datos MySql ha fallado".mysqli_connect_errno();
}else {
    echo "Conexion realizada correctamente";
}

//COnsulta para configurar la configuracion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    //var_dump($nota);
    echo "<h1>".$nota['titulo']."</h1>";
    echo $nota['descripcion']."<br>";
}

//Insertar en la bd desde php
$sql = "INSERT INTO notas VALUES(null ,'Nota desde PHP', 'Esto es una nota desde php','orange')";
$insertar = mysqli_query($conexion, $sql);

echo '<hr>';

if ($insertar) {
    echo "Datos insertados correctamente";
}else {
    echo "Error: ". mysqli_error($conexion); 
}
