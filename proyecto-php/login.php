<?php

    //Iniciar conexion y sesion
    require_once 'includes/conexion.php';

    //Recoger datos del formulario
    if(isset($_POST)){
        
        //Borra error antiguo
        if (isset($_SESSION['errorLogin'])) {
            session_unset($_SESSION['errorLogin']);
        }

        //Recoger datos del formulario
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        //Consulta para comprobar las credenciales del usuario
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = mysqli_query($db, $sql); 

        if ($login && mysqli_num_rows($login) ==1) {
            $usuario = mysqli_fetch_assoc($login);
            //var_dump($usuario);
            //die();

            //Comprobar la contraseña
            $verify = password_verify($password, $usuario['password']);

            if ($verify) {
                //utilizar una sesion para guardar los datos del usuario logueado
                $_SESSION['usuario'] = $usuario;

                if (isset($_SESSION['errorLogin'])) {
                    session_unset($_SESSION['errorLogin']);
                }
            
            }else {
                //Si algo falla enviar una sesion con el fallo
                $_SESSION['errorLogin'] = "Login incorrecto";
            }
        }else {
            //Mensaje de error
            $_SESSION['errorLogin'] = "Login incorrecto";
        }
    }

    //Redirigir al index.php
    header('Location: index.php');
