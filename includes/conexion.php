<?php
// CONEXION
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$baseDeDatos = 'test';

$db = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);
mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar sesion
if (!isset($_SESSION)) {
    session_start();
}

?>