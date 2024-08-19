<?php 
include('../../config.php');

$id_usuario =$_POST['txt_id_user'];

$sql_delete = "DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario";
$query_delete = $pdo->prepare($sql_delete);
$query_delete->bindParam('id_usuario', $id_usuario);
$query_delete->execute();
session_start();
$_SESSION['mensaje'] = 'El usuario ha sido eliminado';
$_SESSION['icono'] = 'success';
header('Location: '.$URL.'/usuarios/');

?>