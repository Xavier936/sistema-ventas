<?php 
$id_rol =$_GET['id'];
//echo $id_usuario_get;

$sql_show_rol = "SELECT * FROM tb_roles WHERE id_rol = '$id_rol'";
$query_rol = $pdo->prepare($sql_show_rol);
$query_rol->execute();
$roldata = $query_rol->fetchAll(PDO::FETCH_ASSOC);

foreach($roldata as $dataRol){
    $rol = $dataRol['rol'];
}
?>