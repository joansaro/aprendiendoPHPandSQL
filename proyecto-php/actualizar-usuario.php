<?php
if(isset($_POST)){
    //Conexion a la base de datos
    require_once 'includes/conexion.php';

    //Usando operador ternario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false; 
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    
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

    $guardarUsuario = false;

    if (count($errores) == 0) {
        $usuario = $_SESSION['usuario'];
        $guardarUsuario = true;

        //Comprobar si el email ya existe
        
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_usuario = mysqli_fetch_assoc($isset_email);
        
        if ($isset_usuario['id'] == $usuario['id'] || empty($isset_usuario) ) {
            //Actualizar usuarion en la bd
                        
            $sql = "UPDATE usuarios SET ".
            "nombre = '$nombre', ".
            "apellidos =  '$apellidos', ".
            "email = '$email' ".
            "WHERE id = ". $usuario['id'];
            $guardar = mysqli_query($db, $sql);

            if ($guardar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "Tus datos  se han actualizado satisfactoriamente";
            }else {
                $_SESSION['errores'] ['general'] = "Fallo al actualizar tus datos";
            }
        }else {
            $_SESSION['errores'] ['general'] = "El usuario ya existe";
        }
                    
    }else {
        $_SESSION['errores'] = $errores;
    }
}
header('Location: mis-datos.php');
