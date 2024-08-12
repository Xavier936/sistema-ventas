<?php

include('../../config.php');

$email = $_POST['email'];
$password_user= $_POST['password_user'];

$contador = 0;

$sql_login = "SELECT * FROM tb_usuarios WHERE email = '$email' /* AND password_user = '$password_user' */";
$query = $pdo->prepare($sql_login);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $contador+=1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_hash = $usuario['password_user'];
}

if(($contador > 0) && (password_verify($password_user, $password_user_hash))){
    session_start();
    $_SESSION['session_email'] = $email;
    header('Location: '.$URL.'/index.php');
    
}else{
    echo "Datos Incorrectos";
    session_start();
    $_SESSION['mensaje'] = "Datos incorrectos";
    header('Location: '.$URL.'/login');
}
?>