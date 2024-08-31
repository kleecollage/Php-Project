<?php
// INICIAR SESION Y CONEXION A BD
require_once 'includes/conexion.php';

// RECOGER DATOS DEL FORMULARIO
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    // CONSULTA PARA COMPROBAR LAS CREDENCIALES
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        // COMPROBAR LA CONTRASEÑA / CIFRAR
        $verify = password_verify($password, $usuario['password']);
        if ($verify) {
            // USAR SESSION PARA GUARDAR LOS DATOS DEL USUARIO LOGGEADO
            $_SESSION['usuario'] = $usuario;
            if (isset($_SESSION['error_login'])) {
                unset($_SESSION['error_login']);
            }
        } else {
            // ENVIAR UNA SESSION CON EL ERROR
            $_SESSION['error_login'] = "Login Incorrecto";
        }
    } else {
        // MENSAJE DE ERROR
        $_SESSION['error_login'] = "Login Incorrecto";
    }
}
// REDIRIGIR AL INDEX
header('Location: index.php');
?>