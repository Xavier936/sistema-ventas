<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../../config.php');

$nombres = $_POST['txt_nombre'];
$email = $_POST['txt_email'];
$password_user = $_POST['txt_pwd'];
$pass_repeat = $_POST['txt_pass'];

if ($password_user == $pass_repeat) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    $crear_usuarios = "INSERT INTO 
                  tb_usuarios( nombres, email, password_user, fyh_creacion ) 
                  VALUES (:nombres,:email,:password_user, :fechaHora)";

    $sql_create = $pdo->prepare($crear_usuarios);

    $sql_create->bindParam(':nombres', $nombres);
    $sql_create->bindParam(':email', $email);
    $sql_create->bindParam(':password_user', $password_user);
    $sql_create->bindParam(':fechaHora', $fechaHora);
    $sql_create->execute();
    session_start();
    $_SESSION['mensaje'] = 'Usuario grabado con exito';
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/usuarios');
}else{
    session_start();
    $_SESSION['mensaje'] = 'Error las contraseñas no son iguales';
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/usuarios/create.php');
}



?>
