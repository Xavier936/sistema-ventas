<?php 
$id_usuario_get =$_GET['id'];
//echo $id_usuario_get;

$sql_show_user = "SELECT * FROM tb_usuarios WHERE id_usuario = '$id_usuario_get'";
$query_user = $pdo->prepare($sql_show_user);
$query_user->execute();
$userdata = $query_user->fetchAll(PDO::FETCH_ASSOC);

foreach($userdata as $dataUser){
    $nombres = $dataUser['nombres'];
    $email = $dataUser['email'];
}
?>