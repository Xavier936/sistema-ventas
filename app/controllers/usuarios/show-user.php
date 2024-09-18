<?php 
$id_usuario_get =$_GET['id'];
//echo $id_usuario_get;

$sql_show_user = "SELECT us.id_usuario as id_usuario, us.nombres as nombres, us.email as email, roles.rol as rol 
                        FROM tb_usuarios as us LEFT JOIN tb_roles as roles on us.id_usuario = roles.id_rol WHERE id_usuario = '$id_usuario_get'";
$query_user = $pdo->prepare($sql_show_user);
$query_user->execute();
$userdata = $query_user->fetchAll(PDO::FETCH_ASSOC);

foreach($userdata as $dataUser){
    $nombres = $dataUser['nombres'];
    $email = $dataUser['email'];
    $rol = $dataUser['rol'];
}
?>