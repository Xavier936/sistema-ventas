<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../../config.php');

$nombres = $_POST['txt_nombre'];
$email = $_POST['txt_email'];
$password_user = $_POST['txt_pwd'];
$pass_repeat = $_POST['txt_pass'];
//$token = 45;

/* echo $nombres;
echo $email;
echo $password_user;
echo $pass_repeat;
echo $fechaHora; */

if ($password_user == $pass_repeat) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    $crear_usuarios = "INSERT INTO 
                  tb_usuarios( nombres, email, password_user, fyh_creacion ) 
                  VALUES (:nombres,:email,:password_user, :fechaHora)";

    $sql_create = $pdo->prepare($crear_usuarios);

    $sql_create->bindParam(':nombres', $nombres);
    $sql_create->bindParam(':email', $email);
    $sql_create->bindParam(':password_user', $password_user);
    //$sql_create->bindParam(':token', $token);
    $sql_create->bindParam(':fechaHora', $fechaHora);
    $sql_create->execute();
}else{
    echo "Error las contraseñas no son iguales";
}



/* $crear_usuarios= "INSERT INTO 
                  tb_usuarios( nombres, email, password_user, fyh_creacion ) 
                  VALUES (':nombres',':email',':password_user', :fechaHora)";

$sql_create= $pdo->prepare($crear_usuarios);

$sql_create->bindParam(':nombres', $nombres);
$sql_create->bindParam(':email', $email);
$sql_create->bindParam(':password_user', $password_user);
//$sql_create->bindParam(':token', $token);
$sql_create->bindParam(':fechaHora', $fechaHora);

if($sql_create->execute()){
    echo "datos ingresados correctamente";

}else{
    echo "Error al igresar datos";
}
 */
