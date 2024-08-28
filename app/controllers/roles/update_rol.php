<?php
include('../../config.php');

$id_rol = $_POST['txt_id_rol'];
$rol = $_POST['txt_rol'];

$update_rol = "UPDATE tb_roles SET 
                            rol= :rol,
                            fyh_actualizacion= :fyh_actualizacion
                            WHERE id_rol=:id_rol";

$sql_update_rol = $pdo->prepare($update_rol);

$sql_update_rol->bindParam(':rol', $rol);
$sql_update_rol->bindParam(':fyh_actualizacion', $fechaHora);
$sql_update_rol->bindParam(':id_rol', $id_rol);

if ($sql_update_rol->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Rol actualizado con exito';
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/roles');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Error al editar rol';
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/roles/update.php?id=' . $id_rol);
}
