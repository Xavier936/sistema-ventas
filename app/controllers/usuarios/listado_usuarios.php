<?php

include('../../config.php');

$sql_usuarios = "SELECT * FROM tb_usuarios";
$query_user= $pdo->prepare($sql_usuarios);
$query_user->execute();

$data_user= $query_user->fetchAll(PDO::FETCH_ASSOC);

?>