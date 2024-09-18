<?php

include('../../config.php');

$sql_usuarios = "SELECT us.id_usuario as id_usuario, us.nombres as nombres, us.email as email, roles.rol as rol 
                        FROM tb_usuarios as us LEFT JOIN tb_roles as roles on us.id_usuario = roles.id_rol;";
$query_user= $pdo->prepare($sql_usuarios);
$query_user->execute();

$data_user= $query_user->fetchAll(PDO::FETCH_ASSOC);

?>