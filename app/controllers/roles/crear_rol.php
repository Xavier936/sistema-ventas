<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../../config.php');

$rol = $_POST['txt_rol'];


$crear_rol = "INSERT INTO 
                  tb_roles( rol, fyh_creacion ) 
                  VALUES (:rol, :fechaHora)";

$sql_create = $pdo->prepare($crear_rol);

$sql_create->bindParam(':rol', $rol);
$sql_create->bindParam(':fechaHora', $fechaHora);
if ($sql_create->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Rol grabado con exito';
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/roles');
} else {
    session_start();
    $_SESSION['mensaje'] = 'No se pudo registrar rol';
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/roles/create.php');
}
