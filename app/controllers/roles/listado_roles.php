<?php

include('../../config.php');

$sql_roles = "SELECT * FROM tb_roles";
$query_rol= $pdo->prepare($sql_roles);
$query_rol->execute();

$data_rol= $query_rol->fetchAll(PDO::FETCH_ASSOC);

?>