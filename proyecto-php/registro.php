<?php
if(isset($_POST)){
    //Conexion a la base de datos
    require_once 'includes/conexion.php';

    if(!isset($_SESSION)){
    session_start();
    }

    //Usando operador ternario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false; 
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    
    //Arrary de errores
    $errores = array();

    //Validar los datos antes de guardarlos en la bd
    //Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombreValidado = true;
    }else {
        $nombreValidado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //Validar campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidosValidado = true;
    }else {
        $apellidosValidado = false;
        $errores['apellidos'] = "El apellidos no es valido";
    }

    //Validar campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailValidado = true;
    }else {
        $emailValidado = false;
        $errores['email'] = "El email no es valido";
    }

    //VAlidar contraseña
    if (!empty($password)) {
        $passwordValidado = true;
    }else{
        $passwordValidado = false;
        $errores['password'] = "La password esta basia";
    }

    $guardarUsuario = false;

    if (count($errores) == 0) {
        $guardarUsuario = true;

        //Cifrar la contraseña
        $passwordSegura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //Insertar usuarion en la bd
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$passwordSegura', CURDATE())";
        $guardar = mysqli_query($db, $sql);



        if ($guardar) {
            $_SESSION['completado'] = "EL registro se a completado satisfactoriamente";
        }else {
            $_SESSION['errores'] ['general'] = "Fallo al registrar el usuario";
        }
    }else {
        $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');
