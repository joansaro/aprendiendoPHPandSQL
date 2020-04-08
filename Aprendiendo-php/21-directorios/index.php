<?php
if (!is_dir('MiCarpeta')) {
mkdir('MiCarpeta', 0777) or die ("No se puede crear la carpeta");
}else {
    echo "Ya existe la carpeta";
}


//Borrar directerio
//rmdir('MiCarpeta');

echo '<hr>'."<h1>Contenido de MiCarpeta</h1>";
if ($gestor = opendir('./MiCarpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if($archivo != '.' && $archivo != '..'){
        echo $archivo. '<br>';
        }
    }
}