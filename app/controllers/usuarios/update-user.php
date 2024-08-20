<?php 
include('../../config.php');

$nombres = $_POST['txt_nombre'];
$email = $_POST['txt_email'];
$password_user = $_POST['txt_pwd'];
$pass_repeat = $_POST['txt_pass'];
$id_usuario = $_POST['txt_id_user'];


/* echo $nombres;
echo $email;
echo $password_user;
echo $pass_repeat;
echo $id_usuario;
 */
if($password_user==""){
    if ($password_user == $pass_repeat) {
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);
        $update_usuarios = "UPDATE tb_usuarios SET 
                            nombres= :nombres,
                            email= :email,
                            fyh_actualizacion= :fyh_actualizacion
                            WHERE id_usuario=:id_usuario";
    
        $sql_create = $pdo->prepare($update_usuarios);
    
        $sql_create->bindParam(':nombres', $nombres);
        $sql_create->bindParam(':email', $email);
        $sql_create->bindParam(':fyh_actualizacion', $fechaHora);
        $sql_create->bindParam(':id_usuario', $id_usuario);
        $sql_create->execute();
        session_start();
        $_SESSION['mensaje'] = 'Usuario actualizado con exito';
        $_SESSION['icono'] = 'success';
        header('Location: '.$URL.'/usuarios');
    }else{
        session_start();
        $_SESSION['mensaje'] = 'Error las contraseñas no son iguales';
        $_SESSION['icono'] = 'error';
        header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario);
    }

}else{
    if ($password_user == $pass_repeat) {
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);
        $update_usuarios = "UPDATE tb_usuarios SET 
                            nombres= :nombres,
                            email= :email,
                            password_user= :password_user,
                            fyh_actualizacion= :fyh_actualizacion
                            WHERE id_usuario=:id_usuario";
    
        $sql_create = $pdo->prepare($update_usuarios);
    
        $sql_create->bindParam(':nombres', $nombres);
        $sql_create->bindParam(':email', $email);
        $sql_create->bindParam(':password_user', $password_user);
        $sql_create->bindParam(':fyh_actualizacion', $fechaHora);
        $sql_create->bindParam(':id_usuario', $id_usuario);
        $sql_create->execute();
        session_start();
        $_SESSION['mensaje'] = 'Usuario actualizado con exito';
        $_SESSION['icono'] = 'success';
        header('Location: '.$URL.'/usuarios');
    }else{
        session_start();
        $_SESSION['mensaje'] = 'Error las contraseñas no son iguales';
        $_SESSION['icono'] = 'error';
        header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario);
    }

}





?>